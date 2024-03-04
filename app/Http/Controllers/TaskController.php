<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
	public function index(Request $request): View
	{
		$tasks = request()->user()->tasks();

		if ($request->has('due_tasks_only')) {
			$tasks->where('due_date', '<', now());
		}

		if ($request->has('sort_by')) {
			$tasks->orderByField($request->sort_by);
		} else {
			$tasks->latest();
		}

		return view('tasks.index', [
			'tasks' => $tasks->paginate(8)->withQueryString(),
		]);
	}
}
