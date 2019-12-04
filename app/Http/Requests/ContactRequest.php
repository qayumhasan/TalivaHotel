<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest {
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
			'address' => 'required',
			'phone' => 'required',
			'email' => 'required|email',
			'image' => 'image',
		];
	}

	public function messages() {
		return [
			'address.required' => 'Address  must not be empty!',
			'phone.required' => 'Phone Number must not be empty!',
			'email.required' => 'Email Address must not be empty!',
		];
	}
}
