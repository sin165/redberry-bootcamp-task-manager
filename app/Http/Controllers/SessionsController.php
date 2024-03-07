<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSessionsRequest;

class SessionsController extends Controller
{
	public function create(): View
	{
		$cover = Storage::files('cover')[0] ?? null;
		return view('login', [
			'cover' => $cover ? 'storage/' . $cover : 'images/default_cover.png',
		]);
	}

	public function store(StoreSessionsRequest $request): RedirectResponse
	{
		if (!auth()->attempt($request->validated())) {
			throw ValidationException::withMessages([
				'password' => __('auth.password'),
			]);
		}
		return redirect()->route('home');
	}

	public function destroy(Request $request): RedirectResponse
	{
		auth()->logout();
		$request->session()->invalidate();
		return redirect()->route('login');
	}
}
