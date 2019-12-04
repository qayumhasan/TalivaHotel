<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {
	/*
		     *
		     * The Room that are mass assignable.
		     *
	*/
	protected $fillable = ['room_no', 'room_name', 'room_desc', 'room_price', 'room_type', 'room_size', 'room_guest', 'room_amenities', 'room_img', 'status'];

	/**
	 * Get the Room Type for the Room index.
	 */

	public function scopeActive($query) {
		return $query->where('status', 2)->limit(12);
	}

	public function roomtype() {
		return $this->hasOne(RoomType::class, 'id', 'room_type');
	}

}
