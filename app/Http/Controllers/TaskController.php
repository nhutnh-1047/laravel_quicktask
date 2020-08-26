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
    public function postTask(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
    }

    /**
     * Delete Task
     */
    public function deleteTask($id)
    {
        Task::findOrFail($id)->delete();
        
        return redirect('/');
    }
}
