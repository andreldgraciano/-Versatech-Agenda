<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('tasks.task_index');
    }

    public function taskCreate(){
        return view('tasks.task_create');
    }
}
