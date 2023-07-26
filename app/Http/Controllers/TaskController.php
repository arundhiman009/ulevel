<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
      $tasks = Task ::all();
     return view('tasks.index', compact('tasks'));  
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create'); // Removed the named argument from the view() function call.
    }
       public function show(Task $task)
    {
        return view('tasks.index', compact('task'));
    }

    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());
        return redirect()->route('task.index'); // Corrected the route name.
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect()->route('task.index'); // Corrected the route name.
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('task.index'); // Corrected the route name.
    }
}
