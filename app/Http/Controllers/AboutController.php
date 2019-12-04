<?php

namespace App\Http\Controllers;
use App\Http\Requests\AboutRequest;
use App\Model\About;
use Illuminate\Http\Request;
use Image;

class AboutController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$abouts = About::all();
		return view('back-end.about.index', compact('abouts'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.about.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(AboutRequest $request) {

		$about = About::create($request->validated());
		$this->storeImage($about);
		return redirect()->route('about.index')->with('msg', 'About Us Data Insert Successfully!');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function edit(About $about) {
		return view('back-end.about.edit', compact('about'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function update(AboutRequest $request, About $about) {
		$this->isDefault($about);
		$about->update($request->validated());
		$this->storeImage($about);

		return redirect()->route('about.index')->with('update_msg', 'About Us Data Update Successfully!');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\About  $about
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(About $about) {

		$this->isDefault($about);
		$about->delete();
		return redirect()->route('about.index')->with('del_msg', 'About Us Data Delete Successfully!');
	}

	/**
	 * Store a newly created images.
	 *
	 */
	private function storeImage($about) {
		if (request()->hasFile('image')) {
			$about_img = request()->file('image');
			$imagename = $about->id . '.' . $about_img->getClientOriginalExtension();
			Image::make($about_img)->resize(600, 400)->save(base_path('public/back-end/images/about/' . $imagename), 50);

			$about->update([
				'image' => $imagename,
			]);

		}

	}

	/**
	 * Check is image is default.
	 *
	 */
	private function isDefault($about) {
		if ($about->image != 'defaultaboutimg.jpg') {
			$link = base_path('public/back-end/images/about/') . $about->image;
			unlink($link);

		}
	}

}
