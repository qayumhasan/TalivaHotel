<?php

namespace App\Http\Controllers;

use App\Model\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class VideoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$videos = Video::all();
		return view('back-end.video.videos', compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.video.create');
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
				'title' => 'required',
				'video' => 'required|url',
				'image' => 'image',
			],
			[
				'title.required' => 'Title must not be empty!',
				'video.required' => 'Video Link must not be empty!',
				'video.url' => 'Please Insert Volid Video Like!',

			]

		);
		$video_id = Video::insertGetId([
			'title' => $request->title,
			'video' => $request->video,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {

			$video_img = $request->file('image');
			$imagename = $video_id . '.' . $video_img->getClientOriginalExtension();
			Image::make($video_img)->resize(1920, 700)->save(base_path('public/back-end/images/video/' . $imagename), 100);

			Video::findOrFail($video_id)->update([
				'image' => $imagename,

			]);
		}
		return redirect()->route('video.index')->with('msg', 'Video Section Data Insert Successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function show(Video $video) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Video $video) {
		return view('back-end.video.edit', compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Video $video) {
		$request->validate(
			[
				'title' => 'required',
				'video' => 'required',
				'image' => 'image',
			],
			[
				'title.required' => 'Title must not be empty!',
				'video.required' => 'Video Link must not be empty!',
				// 'video.url' => 'Please Insert Volid Video Like!',

			]

		);
		$video->update([
			'title' => $request->title,
			'video' => $request->video,
			'status' => $request->status,
		]);
		$video_id = $video->id;
		if ($request->hasFile('image')) {
			if ($video->image != 'defaultserviceimg.jpg') {
				$link = base_path('public/back-end/images/video/') . $video->image;
				unlink($link);
			}

			$video_img = $request->file('image');
			$imagename = $video_id . '.' . $video_img->getClientOriginalExtension();
			Image::make($video_img)->resize(1920, 700)->save(base_path('public/back-end/images/video/' . $imagename), 100);

			$video->update([
				'image' => $imagename,
			]);
		}
		return redirect()->route('video.index')->with('update_msg', 'Video Section Data Update Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Video  $video
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Video $video) {
		if ($video->image != 'defaultserviceimg.jpg') {
			$link = base_path('public/back-end/images/video/') . $video->image;
			unlink($link);
		}
		$video->delete();
		return redirect()->route('video.index')->with('del_msg', 'Video Section Data Delete Successfully!');
	}
}
