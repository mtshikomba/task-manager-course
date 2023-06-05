<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return View('tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    // create the create function
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return View('tasks.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'boolean'
        ]);

        $task = new Task();

        $task->fill($request->all());

        $task->user()->associate(auth()->user());

        $task->save();

        return Redirect::route('tasks.index');
    }

    public function edit(Task $task): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return View('tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(Task $task, Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'completed' => 'boolean'
        ]);

        $task->update($request->all());

        return Redirect::route('tasks.index');
    }

    public function destroy(Task $task): \Illuminate\Http\RedirectResponse
    {
        $task->delete();

        return Redirect::route('tasks.index');
    }

}
