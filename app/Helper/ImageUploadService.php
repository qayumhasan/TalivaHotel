<?php
namespace App\Helper;
use Image;

/**
 *
 */
class ImageUploadService {

	// insert image file

	public function storeImage($about) {
		if (request()->hasFile('image')) {
			$about_img = request()->file('image');
			$imagename = $about->id . '.' . $about_img->getClientOriginalExtension();
			Image::make($about_img)->resize(600, 400)->save(base_path('public/back-end/images/about/' . $imagename), 50);

			$about->update([
				'image' => $imagename,
			]);

		}

	}

	// check is default image

	public function isDefault($about) {
		if ($about->image != 'defaultaboutimg.jpg') {
			$link = base_path('public/back-end/images/about/') . $about->image;
			unlink($link);
		}
	}
}