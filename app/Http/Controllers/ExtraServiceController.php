<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtraServiceRequest;
use App\Model\ExtraService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ExtraServiceController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$extraservices = ExtraService::all();
		return view('back-end.extraservices.extraservices', compact('extraservices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.extraservices.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ExtraServiceRequest $request) {

		$services_id = ExtraService::insertGetId([
			'fheading' => $request->fheading,
			'sheading' => $request->sheading,
			'text' => $request->text,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('image')) {

			$service_img = $request->file('image');
			$imagename = $services_id . '.' . $service_img->getClientOriginalExtension();
			Image::make($service_img)->resize(639, 500)->save(base_path('public/back-end/images/extraservice/' . $imagename), 100);

			ExtraService::findOrFail($services_id)->update([
				'image' => $imagename,

			]);
		}

		return redirect()->route('extraservices.index')->with('msg', 'Extra Services Insert Successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\ExtraService  $extraService
	 * @return \Illuminate\Http\Response
	 */
	public function show(ExtraService $extraService) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\ExtraService  $extraService
	 * @return \Illuminate\Http\Response
	 */
	public function edit(ExtraService $extraservice) {
		return view('back-end.extraservices.edit', compact('extraservice'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\ExtraService  $extraService
	 * @return \Illuminate\Http\Response
	 */
	public function update(ExtraServiceRequest $request, ExtraService $extraservice) {

		$extraservice->update([
			'fheading' => $request->fheading,
			'sheading' => $request->sheading,
			'status' => $request->status,
			'text' => $request->text,
		]);

		$services_id = $extraservice->id;
		if ($request->hasFile('image')) {

			$service_img = $request->file('image');

			if ($extraservice->image != 'defaultextraserviceimg.jpg') {
				$link = base_path('public/back-end/images/extraservice/') . $extraservice->image;
				unlink($link);
			}

			$imagename = $services_id . '.' . $service_img->getClientOriginalExtension();
			Image::make($service_img)->resize(639, 500)->save(base_path('public/back-end/images/extraservice/' . $imagename), 100);

			$extraservice->update([
				'image' => $imagename,

			]);
		}

		return redirect()->route('extraservices.index')->with('update_msg', 'Extra Services Update Successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\ExtraService  $extraService
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(ExtraService $extraservice) {
		if ($extraservice->image != 'defaultextraserviceimg.jpg') {
			$link = base_path('public/back-end/images/extraservice/') . $extraservice->image;
			unlink($link);
		}

		$extraservice->delete();

		return redirect()->route('extraservices.index')->with('del_msg', 'Extra Services Delete Successfully');

	}
}
