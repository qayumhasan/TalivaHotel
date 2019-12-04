<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
	/*
		     *
		     * The Slider that are mass assignable.
		     *
	*/
	protected $fillable = ['title', 'video', 'image', 'status'];

	public function scopeActive($query) {
		return $query->where('status', 1);
	}
}
