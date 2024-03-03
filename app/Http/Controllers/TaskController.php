<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TaskController extends Controller
{
	public function index(): View
	{
		return view('tasks.index', [
			'tasks' => request()->user()->tasks()->latest()->paginate(8),
		]);
	}
}
