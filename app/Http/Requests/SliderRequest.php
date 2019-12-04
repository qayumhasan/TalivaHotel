<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest {
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
			'heading' => 'required',
			'short_desc' => 'required',
			'image' => 'image',
		];
	}

	public function messages() {
		return [
			'heading.required' => 'Slider Heading must not be empty!',
			'short_desc.required' => 'Slider Short Description  must not be empty!',
			'start_from.required' => 'Slider Amount must not be empty!',
		];
	}
}
