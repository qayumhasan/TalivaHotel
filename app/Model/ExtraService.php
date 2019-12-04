<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExtraService extends Model {
	/*
		     *
		     * The Employee that are mass assignable.
		     *
	*/
	protected $fillable = ['fheading', 'sheading', 'text', 'image', 'status'];

	public function scopeActive($query) {
		return $query->where('status', 1)->limit(6);
	}
}
