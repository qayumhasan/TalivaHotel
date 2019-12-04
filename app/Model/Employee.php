<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
	/*
		     *
		     * The Employee that are mass assignable.
		     *
	*/
	protected $fillable = ['name', 'department', 'image', 'status'];
}
