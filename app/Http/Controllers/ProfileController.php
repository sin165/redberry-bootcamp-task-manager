<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
	public function show(): View
	{
		$cover = Storage::files('cover')[0] ?? null;
		return view('profile', [
			'cover' => $cover ? 'storage/' . $cover : 'images/default_cover.png',
		]);
	}

	public function update(UpdateProfileRequest $request): RedirectResponse
	{
		$user = User::find(auth()->id());
		$attributes = $request->validated();
		if ($attributes['new_password']) {
			$user->password = $attributes['new_password'];
		}
		if ($attributes['profile_picture'] ?? null) {
			if ($user->profile_picture) {
				Storage::delete($user->profile_picture);
			}
			$path = $attributes['profile_picture']->store('profile_pictures');
			$user->profile_picture = $path;
		}
		if ($attributes['cover'] ?? null) {
			$oldCover = Storage::files('cover')[0] ?? null;
			if ($oldCover) {
				Storage::delete($oldCover);
			}
			$attributes['cover']->store('cover');
		}
		$user->save();
		return back()->with('success', __('messages.profile_updated'));
	}
}
