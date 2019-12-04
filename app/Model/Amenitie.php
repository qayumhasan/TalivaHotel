<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Amenitie extends Model {
	/**
	 * The amenities that are mass assignable.
	 *
	 */
	protected $fillable = [
		'amenities_name', 'amenities_icon', 'status',
	];

	protected $primaryKey = 'id';
	protected $table = 'amenities';

	public function getstatusAttribute($attribute) {
		return [
			1 => 'Active',
			0 => 'InActive',
		][$attribute];
	}
}
