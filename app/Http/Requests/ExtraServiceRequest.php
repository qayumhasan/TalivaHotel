<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtraServiceRequest extends FormRequest {
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
			'fheading' => 'required',
			'sheading' => 'required',
			'text' => 'required',
			'image' => 'image',
		];
	}

	public function messages() {
		return [
			'fheading.required' => 'First Heading must not be empty!',
			'sheading.required' => 'Second Heading must not be empty!',
			'text.required' => 'Extra Service Description must not be empty!',
		];
	}
}
