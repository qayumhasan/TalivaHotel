<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageOption extends Model {
	/*
		     *
		     * The RoomType that are mass assignable.
		     *
	*/
	protected $fillable = ['email', 'address', 'copyright', 'status'];
}
