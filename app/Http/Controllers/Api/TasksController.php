<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UpdateTask;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{

    public function index(Request $request)
    {
        return Task::orderBy('created_at', 'desc')->get();
    }

    public function show(Request $request, Task $task) // Route Model Binding
    {
        return $task;
//        return Task::findOrFail($request->task);
    }

    public function destroy(Request $request, Task $task)
    {
        $task->delete();
    }

    public function store(Request $request)
    {
//        Task:create();
        $task = new Task();
        $task->name = $request->name;
        $task->completed = false;
        $task->save();
        return $task;
    }

    public function update(UpdateTask $request, Task $task)
    {
        $task->name = $request->name;
        $task->save();
        return $task;
    }
}
