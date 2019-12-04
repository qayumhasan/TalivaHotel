<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenitieRequest extends FormRequest {
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
		switch ($this->method()) {
		case 'GET':
		case 'DELETE':{
				return [];
			}
		case 'POST':{
				return [
					'amenities_name' => 'required|unique:amenities',
					'amenities_icon' => 'required|unique:amenities',
					'status' => 'sometimes',
				];
			}
		case 'PUT':
		case 'PATCH':{
				return [
					'amenities_name' => 'required|unique:amenities,amenities_name,' . $this->amenitie->id,
					'amenities_icon' => 'required|unique:amenities,amenities_icon,' . $this->amenitie->id,
					'status' => 'sometimes',
				];
			}
		default:
			break;
		}
	}

	public function messages() {
		return [
			'amenities_name.required' => 'Amenities Name must not be empty!',
			'amenities_icon.required' => 'Amenities Icon must not be empty!',
		];
	}
}
