<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	/*
		     *
		     * The Department that are mass assignable.
		     *
	*/
	protected $fillable = ['name', 'status'];
}
