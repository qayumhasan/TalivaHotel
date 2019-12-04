<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {
	/*
		     *
		     * The Service that are mass assignable.
		     *
	*/
	protected $fillable = ['title', 'text', 'logo', 'image', 'status'];

	public function scopeActive($query) {
		return $query->where('status', 1)->limit(6);
	}
}
