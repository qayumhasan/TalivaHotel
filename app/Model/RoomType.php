<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model {
	/*
		     *
		     * The RoomType that are mass assignable.
		     *
	*/
	protected $fillable = ['room_type', 'status'];

	public function scopeActive($query) {
		return $query->where('status', 1);
	}

}
