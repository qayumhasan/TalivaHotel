<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GuestInfo extends Model {
	/*
		     *
		     * The Guest Information that are mass assignable.
		     *
	*/
	protected $fillable = ['booking_id', 'room_id', 'fname', 'lname', 'email', 'phone_no', 'address', 'country', 'postcode', 'town_city', 'payment_method', 'image'];

	public function bookingdatas() {
		return $this->hasOne('App\Model\Booking', 'id', 'booking_id');
	}

	public function getpaymentmethodAttribute($attribute) {
		return [
			1 => 'Pay On Arrival',
			2 => 'Bank Transfers',
			3 => 'Stripe',

		][$attribute];
	}
}
