<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Http\RedirectResponse;

class SessionsController extends Controller
{
    public function store(StoreSessionsRequest $request): RedirectResponse
    {
        if(!auth()->attempt($request->validated())) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => __('auth.failed'),
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
