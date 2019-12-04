<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model {
	/*
		     *
		     * The Logo that are mass assignable.
		     *
	*/
	protected $fillable = ['main_logo', 'footer_logo', 'favicon', 'status'];
}
