<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
	/*
		     *
		     * The Comment that are mass assignable.
		     *
	*/

	protected $fillable = ['user_id', 'post_id', 'rating', 'comment', 'status'];
}
