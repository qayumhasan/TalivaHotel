<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogRequest;
use App\Model\Blog;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$blogs = Blog::all();
		return view('back-end.blogs.index', compact('blogs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.blogs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(BlogRequest $request) {

		$blog = Blog::create($request->validated());
		$this->storeImage($blog);

		return redirect()->route('blog.index')->with('msg', 'Blog Insert Successfully!');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Blog $blog) {
		return view('back-end.blogs.edit', compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function update(BlogRequest $request, Blog $blog) {

		$blog->update($request->validated());
		$this->isDefault($blog);
		$this->storeImage($blog);

		return redirect()->route('blog.index')->with('update_msg', 'Blog Update Successfully!');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Blog $blog) {

		$this->isDefault($blog);
		$blog->delete();
		return redirect()->route('blog.index')->with('del_msg', 'Blog Delete Successfully!');
	}

	// store an image

	private function storeImage($blog) {
		if (request()->hasFile('image')) {
			$blog_img = request()->file('image');
			$imagename = $blog->id . '.' . $blog_img->getClientOriginalExtension();
			Image::make($blog_img)->resize(320, 240)->save(base_path('public/back-end/images/blog/' . $imagename), 50);

			$blog->update([
				'image' => $imagename,
			]);
		}
	}

	// check image is defaultblogimg

	private function isDefault($blog) {
		if (request()->hasFile('image')) {
			if ($blog->image != 'defaultblogimg.jpg') {

				$link = base_path('public/back-end/images/blog/') . $blog->image;
				unlink($link);
			}
		}
	}
}
