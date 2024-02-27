<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SessionsController extends Controller
{
    public function create(): View
    {
        return view('sessions.create');
    }
}
