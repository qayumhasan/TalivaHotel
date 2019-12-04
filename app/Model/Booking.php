<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

	public function guestdatas() {
		return $this->hasOne(GuestInfo::class);
	}
	protected $dateFormat = 'U';
}
