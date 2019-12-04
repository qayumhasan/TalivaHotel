<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Model\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$sliders = Slider::all();
		return view('back-end.slider.sliders', compact('sliders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.slider.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(SliderRequest $request) {

		$slider_id = Slider::insertGetId([

			'heading' => $request->heading,
			'short_desc' => $request->short_desc,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {
			$slider_img = $request->file('image');
			$imagename = $slider_id . '.' . $slider_img->getClientOriginalExtension();
			Image::make($slider_img)->resize(1920, 750)->save(base_path('public/back-end/images/slider/' . $imagename), 100);
			Slider::findOrFail($slider_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('slider.index')->with('msg', 'Slider Information Insert Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Slider  $slider
	 * @return \Illuminate\Http\Response
	 */
	public function show(Slider $slider) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Slider  $slider
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Slider $slider) {
		return view('back-end.slider.edit', compact('slider'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Slider  $slider
	 * @return \Illuminate\Http\Response
	 */
	public function update(SliderRequest $request, Slider $slider) {

		$slider->update([
			'heading' => $request->heading,
			'short_desc' => $request->short_desc,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		$slider_id = $slider->id;
		if ($request->hasFile('image')) {
			if (Slider::findOrFail($slider->id)->image != 'defaultsliderimg.jpg') {
				$link = base_path('public/back-end/images/slider/') . Slider::findOrFail($slider->id)->image;
				unlink($link);
			}

			$slider_img = $request->file('image');
			$imagename = $slider_id . '.' . $slider_img->getClientOriginalExtension();
			Image::make($slider_img)->resize(1920, 750)->save(base_path('public/back-end/images/slider/' . $imagename), 100);
			Slider::findOrFail($slider_id)->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('slider.index')->with('update_msg', 'Slider Information Update Successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Slider  $slider
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Slider $slider) {
		$slider_id = $slider->id;
		if (Slider::findOrFail($slider->id)->image != 'defaultsliderimg.jpg') {
			$link = base_path('public/back-end/images/slider/') . Slider::findOrFail($slider->id)->image;
			unlink($link);
		}
		$slider->delete();
		return redirect()->route('slider.index')->with('del_msg', 'Slider Information Delete Successfully');
	}
}
