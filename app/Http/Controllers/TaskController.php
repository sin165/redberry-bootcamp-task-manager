<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Task;
use App\Http\Requests\Task\StoreTaskRequest;

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

	public function store(StoreTaskRequest $request): RedirectResponse
	{
		$attributes = $request->validated();
		Task::create([
			'user_id' => auth()->id(),
			'name'    => [
				'en' => $attributes['name_en'],
				'ka' => $attributes['name_ka'],
			],
			'description' => [
				'en' => $attributes['description_en'],
				'ka' => $attributes['description_ka'],
			],
			'due_date' => $attributes['due_date'],
		]);
		return redirect()->route('home');
	}

	public function destroy(Task $task): RedirectResponse
	{
		$task->delete();
		return back();
	}

	public function destroyOverdueTasks(): RedirectResponse
	{
		request()->user()->tasks()->where('due_date', '<', now())->delete();
		return back();
	}
}
