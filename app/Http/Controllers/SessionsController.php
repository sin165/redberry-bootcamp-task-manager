<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreSessionsRequest;

class SessionsController extends Controller
{
    public function store(StoreSessionsRequest $request)
    {
        if(!auth()->attempt($request->validated())) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
                'password' => __('auth.failed'),
            ]);
        }
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('sessions.create');
    }
}
