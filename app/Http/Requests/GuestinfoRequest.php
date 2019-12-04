<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestinfoRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'fname' => 'required',
			'lname' => 'required',
			'email' => 'required',
			'phone_no' => 'required',
			'address' => 'required',
			'country' => 'required',
			'postcode' => 'required',
			'town_city' => 'required',
			'payment_method' => 'required',
			'image' => 'required|image',
		];
	}

	public function messages() {
		return [
			'fname.required' => 'The Frist Name field is required.',
			'lname.required' => 'The Last Name field is required.',
			'email.required' => 'The Email Address field is required.',
			'phone_no.required' => 'The Phone Number field is required.',
			'address.required' => 'The Address field is required.',
			'country.required' => 'The Country field is required.',
			'postcode.required' => 'The Postcode field is required.',
			'town_city.required' => 'The Town & City Name field is required.',
			'payment_method.required' => 'The Payment Method field Must not be empty.',
		];
	}
}
