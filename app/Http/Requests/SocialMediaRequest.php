<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialMediaRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'facebook' => 'required|unique:social_media',
			'twitter' => 'required|unique:social_media',
			'instagram' => 'required|unique:social_media',
			'youtube' => 'required|unique:social_media',
			'google_pluse' => 'required|unique:social_media',
		];
	}

	public function messages()
	{
		return [
			'facebook.required' => 'Facebook name must not be empty!',
			'twitter.required' => 'Twitter name must not be empty!',
			'instagram.required' => 'Instagram name must not be empty!',
			'youtube.required' => 'Youtube name must not be empty!',
			'google_pluse.required' => 'Google Pluse name must not be empty!',
		];
	}
}
