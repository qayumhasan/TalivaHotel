<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoRequest;
use App\Model\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class LogoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$logos = Logo::all();
		return view('back-end.logos.logos', compact('logos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.logos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(LogoRequest $request) {

		$logo_id = Logo::insertGetId([
			'main_logo' => 'defaultmainlogo.jpg',
			'footer_logo' => 'defaultfooterlogo.jpg',
			'favicon' => 'defaultfaviconlogo.jpg',
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('main_logo')) {

			$main_logo = $request->file('main_logo');
			$imagename = $logo_id . 'main_logo' . '.' . $main_logo->getClientOriginalExtension();
			Image::make($main_logo)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			Logo::findOrFail($logo_id)->update([
				'main_logo' => $imagename,

			]);
		}

		if ($request->hasFile('footer_logo')) {

			$footer_logo = $request->file('footer_logo');
			$imagename = $logo_id . 'footer_logo' . '.' . $footer_logo->getClientOriginalExtension();
			Image::make($footer_logo)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			Logo::findOrFail($logo_id)->update([
				'footer_logo' => $imagename,

			]);
		}

		if ($request->hasFile('favicon')) {

			$favicon = $request->file('favicon');
			$imagename = $logo_id . 'favicon' . '.' . $favicon->getClientOriginalExtension();
			Image::make($favicon)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			Logo::findOrFail($logo_id)->update([
				'favicon' => $imagename,

			]);
		}

		return redirect()->route('logos.index')->with('msg', 'Logo Insert successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Logo  $logo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Logo $logo) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Logo  $logo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Logo $logo) {
		return view('back-end.logos.edit', compact('logo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Logo  $logo
	 * @return \Illuminate\Http\Response
	 */
	public function update(LogoRequest $request, Logo $logo) {
		if ($request->hasFile('main_logo')) {
			if ($logo->main_logo != 'defaullogomainimg.jpg') {
				$link = base_path('public/back-end/images/logos/') . $logo->main_logo;
				unlink($link);
			}
			$logo_id = $logo->id;
			$main_logo = $request->file('main_logo');
			$imagename = $logo_id . 'main_logo' . '.' . $main_logo->getClientOriginalExtension();
			Image::make($main_logo)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			$logo->update([
				'main_logo' => $imagename,
			]);
		}

		if ($request->hasFile('footer_logo')) {
			if ($logo->footer_logo != 'defaulfooterlogoimg.jpg') {
				$link = base_path('public/back-end/images/logos/') . $logo->footer_logo;
				unlink($link);
			}
			$logo_id = $logo->id;
			$footer_logo = $request->file('footer_logo');
			$imagename = $logo_id . 'footer_logo' . '.' . $footer_logo->getClientOriginalExtension();
			Image::make($footer_logo)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			$logo->update([
				'footer_logo' => $imagename,
			]);
		}

		if ($request->hasFile('favicon')) {
			if ($logo->favicon != 'defaulfooterlogoimg.jpg') {
				$link = base_path('public/back-end/images/logos/') . $logo->favicon;
				unlink($link);
			}
			$logo_id = $logo->id;
			$favicon = $request->file('favicon');
			$imagename = $logo_id . 'favicon' . '.' . $favicon->getClientOriginalExtension();
			Image::make($favicon)->resize(176, 52)->save(base_path('public/back-end/images/logos/' . $imagename), 100);

			$logo->update([
				'favicon' => $imagename,
			]);
		}

		$logo->update([
			'status' => $request->status,
		]);

		return redirect()->route('logos.index')->with('update_msg', 'Logo Update successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Logo  $logo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Logo $logo) {
		if ($logo->main_logo != 'defaullogomainimg.jpg') {
			$link = base_path('public/back-end/images/logos/') . $logo->main_logo;
			unlink($link);
		}

		if ($logo->footer_logo != 'defaulfooterlogoimg.jpg') {
			$link = base_path('public/back-end/images/logos/') . $logo->footer_logo;
			unlink($link);
		}

		if ($logo->favicon != 'defaulfaviconimg.jpg') {
			$link = base_path('public/back-end/images/logos/') . $logo->favicon;
			unlink($link);
		}

		$logo->delete();
		return redirect()->route('logos.index')->with('del_msg', 'Logo Delete successfully');
	}

}
