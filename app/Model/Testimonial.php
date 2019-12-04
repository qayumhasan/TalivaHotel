<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {
	/*
		     *
		     * The Testimonial that are mass assignable.
		     *
	*/
	protected $fillable = ['user', 'testionial', 'image', 'status'];
}
