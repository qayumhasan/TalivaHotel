<?php

namespace App\Http\Controllers;
use App\Http\Requests\SocialMediaRequest;
use App\Model\SocialMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialMediaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$socialmedias = SocialMedia::all();
		return view('back-end.socialmedias.socialmedias', compact('socialmedias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.socialmedias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(SocialMediaRequest $request) {
		SocialMedia::insert([
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'instagram' => $request->instagram,
			'youtube' => $request->youtube,
			'google_pluse' => $request->google_pluse,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);
		return redirect()->route('socialmedias.index')->with('msg', 'Social Medias Insert successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\SocialMedia  $socialMedia
	 * @return \Illuminate\Http\Response
	 */
	public function show(SocialMedia $socialMedia) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\SocialMedia  $socialMedia
	 * @return \Illuminate\Http\Response
	 */
	public function edit(SocialMedia $socialmedia) {
		return view('back-end.socialmedias.edit', compact('socialmedia'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\SocialMedia  $socialMedia
	 * @return \Illuminate\Http\Response
	 */
	public function update(SocialMediaRequest $request, SocialMedia $socialmedia) {
		$socialmedia->update([
			'facebook' => $request->facebook,
			'twitter' => $request->twitter,
			'instagram' => $request->instagram,
			'youtube' => $request->youtube,
			'google_pluse' => $request->google_pluse,
			'status' => $request->status,
		]);
		return redirect()->route('socialmedias.index')->with('update_msg', 'Social Medias Update successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\SocialMedia  $socialMedia
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(SocialMedia $socialmedia) {

		$socialmedia->delete();
		return redirect()->route('socialmedias.index')->with('del_msg', 'Social Medias Delete successfully!');
	}
}
