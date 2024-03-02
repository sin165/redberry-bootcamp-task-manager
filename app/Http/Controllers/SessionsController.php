<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Http\RedirectResponse;

class SessionsController extends Controller
{
	public function store(StoreSessionsRequest $request): RedirectResponse
	{
		if (!auth()->attempt($request->validated())) {
			throw ValidationException::withMessages([
				'password' => __('auth.password'),
			]);
		}
		return redirect()->route('home');
	}

	public function destroy(): RedirectResponse
	{
		auth()->logout();
		return redirect()->route('sessions.create');
	}
}
