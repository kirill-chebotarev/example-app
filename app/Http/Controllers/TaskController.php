<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function submit(TaskRequest $request)
    {

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->route('home')->with('success', 'Задача была добавлена');
    }

    public function allTasks(){
        $task = new Task();
        return view('tasks', ['tasks' => $task->all()]);
    }

    public function deleteTask(Task $task){
        $task->delete();
        return redirect()->route('home');
    }
}
