<?php

namespace App\Http\Controllers;
use App\Http\Requests\AmenitieRequest;
use App\Model\Amenitie;
use Illuminate\Http\Request;

class AmenitieController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$amenities = Amenitie::all();
		return view('back-end.amenitie.index', compact('amenities'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.amenitie.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(AmenitieRequest $request) {

		Amenitie::create($request->validated());

		return redirect()->route('amenitie.index')->with('msg', 'Amenitie Insert successfully');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Amenitie  $amenitie
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Amenitie $amenitie) {
		return view('back-end.amenitie.edit', compact('amenitie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Amenitie  $amenitie
	 * @return \Illuminate\Http\Response
	 */
	public function update(AmenitieRequest $request, Amenitie $amenitie) {

		$amenitie->update($request->validated());

		return redirect()->route('amenitie.index')->with('update_msg', 'Amenitie Update successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Amenitie  $amenitie
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Amenitie $amenitie) {
		$amenitie->delete();
		return redirect()->route('amenitie.index')->with('del_msg', 'Amenitie Delete successfully');
	}
}
