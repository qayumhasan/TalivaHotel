<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
	/*
		     *
		     * The Blog that are mass assignable.
		     *
	*/
	protected $fillable = ['title', 'text', 'image', 'author', 'status'];
}
