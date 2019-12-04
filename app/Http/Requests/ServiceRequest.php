<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest {
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
			'title' => 'required',
			'text' => 'required|max:200',
			'logo' => 'required',
		];
	}

	public function messages() {
		return [
			'title.required' => 'Title must not be empty!',
			'text.required' => 'Service Description must not be empty!',
			'logo.required' => 'Logo must not be empty!',
		];
	}
}
