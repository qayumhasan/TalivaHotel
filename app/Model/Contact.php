<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
	/*
		     *
		     * The Contract that are mass assignable.
		     *
	*/
	protected $fillable = ['address', 'phone', 'email', 'image', 'status'];
}
