<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest {
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
			'author' => 'required',
			'text' => 'required',
			'image' => 'sometimes|file|image',
			'status' => 'sometimes',
		];
	}

	public function messages() {
		return [
			'title.required' => 'Title must not be empty!',
			'text.required' => 'Description must not be empty!',
		];
	}
}
