<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model {
	/*
		     *
		     * The Social Media that are mass assignable.
		     *
	*/
	protected $fillable = ['facebook', 'twitter', 'instagram', 'youtube', 'google_pluse', 'status'];
}
