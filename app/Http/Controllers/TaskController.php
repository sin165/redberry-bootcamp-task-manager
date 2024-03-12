<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Task;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Http\Requests\Task\UpdateTaskRequest;

class TaskController extends Controller
{
	public function index(Request $request): View
	{
		$tasks = auth()->user()->tasks();

		if ($request->has('due_tasks_only')) {
			$tasks->dueTasksOnly();
		}

		$tasks->orderByField($request->sort_by ?? 'created_at_desc');

		return view('tasks.index', [
			'tasks' => $tasks->paginate(8)->withQueryString(),
		]);
	}

	public function show(Task $task): View
	{
		return view('tasks.show', [
			'task' => $task,
		]);
	}

	public function store(StoreTaskRequest $request): RedirectResponse
	{
		Task::create($request->validated() + ['user_id' => auth()->id()]);
		return redirect()->route('home')->with('success', __('messages.task_created'));
	}

	public function edit(Task $task): View
	{
		return view('tasks.edit', [
			'task' => $task,
		]);
	}

	public function update(UpdateTaskRequest $request, Task $task): RedirectResponse
	{
		$task->update($request->validated());
		return redirect()->route('tasks.show', $task->id)->with('success', __('messages.task_updated'));
	}

	public function destroy(Task $task): RedirectResponse
	{
		$task->delete();
		return back()->with('success', __('messages.task_deleted'));
	}

	public function destroyOverdueTasks(): RedirectResponse
	{
		auth()->user()->tasks()->where('due_date', '<', now())->delete();
		return back()->with('success', __('messages.tasks_deleted'));
	}
}
