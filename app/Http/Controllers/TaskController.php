<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Task;

class TaskController extends Controller
{
	public function index(Request $request): View
	{
		$tasks = request()->user()->tasks();

		if ($request->has('due_tasks_only')) {
			$tasks->where('due_date', '<', now());
		}

		$tasks->orderByField($request->sort_by ?? 'created_at_desc');

		return view('tasks.index', [
			'tasks' => $tasks->paginate(8)->withQueryString(),
		]);
	}

	public function show(Task $task)
	{
		return view('tasks.show', [
			'task' => $task,
		]);
	}
}
