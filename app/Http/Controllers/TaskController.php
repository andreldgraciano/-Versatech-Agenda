<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $searchDate = request('searchDate');
        $searchTitle = request('searchTitle');
        
        $user = auth()->user();

        if ($searchDate) {
            $tasks = Task::where([
                ['date', $searchDate],
                ['user_id', $user->id]
            ])->get();
        } else if ($searchTitle){
            $tasks = Task::where([
                ['title', 'like', '%'.$searchTitle.'%' ],
                ['user_id', $user->id]
            ])->get();
        } else {
            $tasks = Task::where([
                ['user_id', $user->id]
            ])->get();
        }


        return view('home', compact('tasks', 'searchDate', 'searchTitle'));
    }

    public function tasks(){
        $searchDate = request('searchDate');
        $searchTitle = request('searchTitle');

        if ($searchDate) {
            $tasks = Task::where([
                ['date', $searchDate]
            ])->get();
        } else if ($searchTitle){
            $tasks = Task::where([
                ['title', 'like', '%'.$searchTitle.'%' ]
            ])->get();
        } else {
            $tasks = Task::all();
        }

        return view('tasks.tasks_list', compact('tasks', 'searchDate', 'searchTitle'));
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

            $user = auth()->user();
            $task->user_id = $user->id;

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