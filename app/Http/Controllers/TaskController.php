<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks.task_index', compact('tasks'));
    }

    public function taskCreate(){
        return view('tasks.task_create');
    }
}
