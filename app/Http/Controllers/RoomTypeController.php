<?php

namespace App\Http\Controllers;

use App\Model\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RoomTypeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$roomtypes = RoomType::all();
		return view('back-end.roomtype.roomtypes', compact('roomtypes'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('back-end.roomtype.create');
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
				'room_type' => 'required|unique:room_types|max:30',
			],
			[
				'room_type.required' => 'Room Type Name is Require',
			]

		);

		RoomType::insert([
			'room_type' => $request->room_type,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);
		return redirect()->route('roomtype.index')->with('msg', 'Room Type Insert Successfully');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\RoomType  $roomType
	 * @return \Illuminate\Http\Response
	 */
	public function edit(RoomType $roomtype) {

		return view('back-end.roomtype.edit', compact('roomtype'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\RoomType  $roomType
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, RoomType $roomtype) {
		$request->validate(
			[
				'room_type' => 'required|unique:room_types|max:30',
			],
			[
				'room_type.required' => 'Room Type Name is Require',
			]

		);

		$roomtype->update([
			'room_type' => $request->room_type,
			'status' => $request->status,
		]);

		return redirect()->route('roomtype.index')->with('update_msg', 'Room Type Update Successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\RoomType  $roomType
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(RoomType $roomtype) {
		$roomtype->delete();
		return redirect()->route('roomtype.index')->with('del_msg', 'Room Type Delete Successfully');
	}
}
