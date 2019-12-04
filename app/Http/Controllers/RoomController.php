<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomRequest;
use App\Model\Amenitie;
use App\Model\Room;
use App\Model\RoomType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class RoomController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$rooms = Room::all();
		return view('back-end.rooms.rooms', compact('rooms'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$roomtypes = RoomType::all();
		$amenities = Amenitie::all();
		return view('back-end.rooms.roominsert', compact('roomtypes', 'amenities'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(RoomRequest $request) {

		$amenities = collect([]);
		foreach ($request->room_amenities as $key => $value_of_amenities) {
			$amenities->put('amenitie' . $key, $value_of_amenities);
		}

		$room_id = Room::insertGetId([
			'room_no' => $request->room_no,
			'room_name' => $request->room_name,
			'room_desc' => $request->room_desc,
			'room_price' => $request->room_price,
			'room_type' => $request->room_type,
			'room_size' => $request->room_size,
			'room_guest' => $request->room_guest,
			'room_amenities' => $amenities,
			'status' => $request->status,
			'created_at' => Carbon::now(),
		]);

		if ($request->hasFile('room_img')) {
			$room_img = $request->file('room_img');
			$imagename = $room_id . '.' . $room_img->getClientOriginalExtension();
			Image::make($room_img)->resize(370, 230)->save(base_path('public/back-end/images/room/' . $imagename), 100);
			Room::findOrFail($room_id)->update([
				'room_img' => $imagename,
			]);
		}

		return redirect()->route('room.index')->with('msg', 'Room Insert successfully');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Room  $room
	 * @return \Illuminate\Http\Response
	 */
	public function show(Room $room) {
		$roomtype = RoomType::where('id', $room->room_type)->first();
		return view('back-end.rooms.show', compact('room', 'roomtype'));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Room  $room
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Room $room) {
		$roomtypes = RoomType::all();
		$amenities = Amenitie::all();

		return view('back-end.rooms.roomedit', compact('room', 'roomtypes', 'amenities'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Room  $room
	 * @return \Illuminate\Http\Response
	 */
	public function update(RoomRequest $request, Room $room) {

		$amenities = collect([]);
		foreach ($request->room_amenities as $key => $value_of_amenities) {
			$amenities->put('amenitie' . $key, $value_of_amenities);
		}

		$room->update([
			'room_no' => $request->room_no,
			'room_name' => $request->room_name,
			'room_desc' => $request->room_desc,
			'room_price' => $request->room_price,
			'room_type' => $request->room_type,
			'room_size' => $request->room_size,
			'room_guest' => $request->room_guest,
			'room_amenities' => $amenities,
			'status' => $request->status,
		]);

		if ($request->hasFile('room_img')) {
			if (Room::findOrFail($room->id)->room_img != 'defaultroomimg.jpg') {
				$link = base_path('public/back-end/images/room/') . Room::findOrFail($room->id)->room_img;
				unlink($link);
			}

			$room_img = $request->file('room_img');
			$imagename = $room->id . '.' . $room_img->getClientOriginalExtension();
			Image::make($room_img)->resize(370, 230)->save(base_path('public/back-end/images/room/' . $imagename), 100);

			Room::findOrFail($room->id)->update([
				'room_img' => $imagename,
			]);
		}
		return redirect()->route('room.index')->with('update_msg', 'Room Update Successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Room  $room
	 * @return \Illuminate\Http\Response
	 */

	public function destroy(Room $room) {
		if (Room::findOrFail($room->id)->room_img != 'defaultroomimg.jpg') {
			$link = base_path('public/back-end/images/room/') . Room::findOrFail($room->id)->room_img;
			unlink($link);
		}

		$room->delete();
		return redirect()->route('room.index')->with('del_msg', 'Room Deleted Successfully');
	}
}
