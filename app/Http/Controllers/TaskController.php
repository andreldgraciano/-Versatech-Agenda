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

    public function taskFormCreate(){
        return view('tasks.task_form_add');
    }

    public function store(Request $request) {
        try {
            $task = new Task;

            $task->title = $request->title;
            $task->description = $request->description;
            $task->address = $request->address;
            $task->date = $request->date;
            $task->start_time = $request->start_time;
            $task->duration_minutes = $request->duration_minutes;

            $task->save();

            return redirect('/atividades')->with('success', 'Atividade adicionada com sucesso!');
        } catch (\Exception $e) {
            // melhorar esta resposta
            return redirect('/atividades/criar')->with('error', $e->getMessage());
        }
    }

    public function show($id) {
        $task = Task::findOrFail($id);

        return view('tasks.task_show', compact('task'));
    }
}