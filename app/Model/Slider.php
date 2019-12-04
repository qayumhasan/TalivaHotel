<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model {
	/*
		     *
		     * The Slider that are mass assignable.
		     *
	*/
	protected $fillable = ['heading', 'short_desc', 'image', 'status'];

	public function scopeActive($query) {
		return $query->where('status', 1);
	}
}
