<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageOptionRequest extends FormRequest {
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
			'email' => 'required|email',
			'address' => 'required',
			'copyright' => 'required',
			'status' => 'nullable',
		];
	}

	public function messages() {
		return [
			'email.required' => 'Email must not be empty!',
			'address.required' => 'Address must not be empty!',
			'copyright.required' => 'Copyright must not be empty!',
		];
	}
}
