<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;

class TaskController extends Controller
{

    /**
     * Show Task Dashboard
     */
    public function index()
    {
        return view('tasks', [
            'tasks' => Task::orderBy('created_at', 'asc')->get(),
        ]);
    }

    /**
     * Add New Task
     */
    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/task');
    }

    /**
     * Delete Task
     */
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();

        return redirect('/task');
    }
}
