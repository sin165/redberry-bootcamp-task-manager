<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
	public function update(UpdateProfileRequest $request): RedirectResponse
	{
		$user = User::find(auth()->id());
		$attributes = $request->validated();
		if ($attributes['new_password']) {
			$user->password = $attributes['new_password'];
		}
		if ($attributes['profile_picture'] ?? null) {
			$path = $attributes['profile_picture']->store('profile_pictures');
			$user->profile_picture = $path;
		}
		$user->save();
		return back();
	}
}
