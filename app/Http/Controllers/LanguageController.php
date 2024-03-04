<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
	public function switch(Request $request): RedirectResponse
	{
		$language = $request->input('language');
		if (in_array($language, config('app.locales'))) {
			session(['language' => $language]);
		}
		return redirect()->back();
	}
}
