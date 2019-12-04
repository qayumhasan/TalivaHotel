<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Model\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$services = Service::all();
		return view('back-end.service.services', compact('services'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.service.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ServiceRequest $request) {

		$services_id = Service::insertGetId([
			'title' => $request->title,
			'text' => $request->text,
			'logo' => $request->logo,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		return redirect()->route('service.index')->with('msg', 'Service Insert Successfully!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Service  $service
	 * @return \Illuminate\Http\Response
	 */
	public function show(Service $service) {

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Service  $service
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Service $service) {
		return view('back-end.service.edit', compact('service'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Service  $service
	 * @return \Illuminate\Http\Response
	 */
	public function update(ServiceRequest $request, Service $service) {

		$service->update([
			'title' => $request->title,
			'text' => $request->text,
			'logo' => $request->logo,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		return redirect()->route('service.index')->with('update_msg', 'Service Information Update Successfully!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Service  $service
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Service $service) {

		$service->delete();

		return redirect()->route('service.index')->with('del_msg', 'Service Delete Successfully!');
	}

}
