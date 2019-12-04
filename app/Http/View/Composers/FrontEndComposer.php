<?php

namespace App\Http\View\Composers;
use App\Model\Logo;
use App\Model\PageOption;
use Illuminate\View\View;

/**
 *
 */
class FrontEndComposer {

	public function compose(View $view) {
		$pageoption = PageOption::where('status', 1)->first();
		$logo = Logo::where('status', 1)->first();
		$view->with(compact('pageoption', 'logo'));
	}
}