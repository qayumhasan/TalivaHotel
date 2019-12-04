<?php

namespace App\Http\Controllers;

use App\Model\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$testimonials = Testimonial::all();
		return view('back-end.testimonial.testimonials', compact('testimonials'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.testimonial.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$request->validate(
			[
				'user' => 'required',
				'testimonial' => 'required',
				'image' => 'image',
			],
			[
				'user.required' => 'User name must not be empty!',
				'testimonial.required' => 'Testionial Text must not be empty!',
			]

		);
		$testionial_id = Testimonial::insertGetId([
			'user' => $request->user,
			'testimonial' => $request->testimonial,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {

			$testionial_img = $request->file('image');
			$imagename = $testionial_id . '.' . $testionial_img->getClientOriginalExtension();
			Image::make($testionial_img)->resize(320, 240)->save(base_path('public/back-end/images/testimonial/' . $imagename), 50);

			Testimonial::findOrFail($testionial_id)->update([
				'image' => $imagename,

			]);
		}
		return redirect()->route('testimonial.index')->with('msg', 'Testimonial Data Insert Successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Testimonial  $testimonial
	 * @return \Illuminate\Http\Response
	 */
	public function show(Testimonial $testimonial) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Testimonial  $testimonial
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Testimonial $testimonial) {
		return view('back-end.testimonial.edit', compact('testimonial'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Testimonial  $testimonial
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Testimonial $testimonial) {
		$request->validate(
			[
				'user' => 'required',
				'testimonial' => 'required',
				'image' => 'image',
			],
			[
				'user.required' => 'User name must not be empty!',
				'testimonial.required' => 'Testionial Text must not be empty!',
			]

		);
		$testimonial->update([
			'user' => $request->user,
			'testimonial' => $request->testimonial,
			'status' => $request->status,
		]);

		$testionial_id = $testimonial->id;

		if ($request->hasFile('image')) {

			if ($testimonial->image != 'defaultestimonialimg.jpg') {
				$link = base_path('public/back-end/images/testimonial/') . $testimonial->image;
				unlink($link);
			}

			$testionial_img = $request->file('image');
			$imagename = $testionial_id . '.' . $testionial_img->getClientOriginalExtension();
			Image::make($testionial_img)->resize(320, 240)->save(base_path('public/back-end/images/testimonial/' . $imagename), 50);

			$testimonial->update([
				'image' => $imagename,

			]);
		}
		return redirect()->route('testimonial.index')->with('update_msg', 'Testimonial Data Update Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Testimonial  $testimonial
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Testimonial $testimonial) {
		if ($testimonial->image != 'defaultestimonialimg.jpg') {
			$link = base_path('public/back-end/images/testimonial/') . $testimonial->image;
			unlink($link);
		}
		$testimonial->delete();
		return redirect()->route('testimonial.index')->with('del_msg', 'Testimonial Data Delete Successfully!');
	}
}
