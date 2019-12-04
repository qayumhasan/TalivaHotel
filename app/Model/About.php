<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class About extends Model {

	protected $fillable = ['title', 'stitle', 'text', 'image', 'status'];

	protected $primaryKey = 'id';
	protected $table = 'abouts';

	public function getstatusAttribute($attribute) {
		return [
			1 => 'Active',
			0 => 'InActive',
		][$attribute];
	}
}
