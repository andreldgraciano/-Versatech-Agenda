<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;

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
            $user = auth()->user();
            
            $durationMinutes = (int) $request->duration_minutes;
    
            $newTaskStartTime = Carbon::parse($request->start_time);
            $newTaskEndTime = $newTaskStartTime->copy()->addMinutes($durationMinutes);
    
            $conflictingTask = Task::where('user_id', $user->id)
                ->where(function ($query) use ($newTaskStartTime, $newTaskEndTime) {
                    $query->whereBetween('start_time', [$newTaskStartTime, $newTaskEndTime])
                          ->orWhereRaw('? BETWEEN start_time AND DATE_ADD(start_time, INTERVAL duration_minutes MINUTE)', [$newTaskStartTime]);
                })
                ->first();
    
            if ($conflictingTask) {
                return redirect('/atividades/criar')->with('error', 'Conflito de horário com outra tarefa existente.');
            }
    
            $task = new Task;
            $task->title = $request->title;
            $task->description = $request->description;
            $task->address = $request->address;
            $task->date = $request->date;
            $task->start_time = $newTaskStartTime;
            $task->duration_minutes = $durationMinutes;
            $task->user_id = $user->id;
            $task->save();
    
            return redirect('user/atividades')->with('success', 'Atividade adicionada com sucesso!');
        } catch (\Exception $e) {
            return redirect('/atividades/criar')->with('error', 'Erro ao adicionar atividade: ' . $e->getMessage());
        }
    }

    public function show($id) {
        $task = Task::findOrFail($id);

        $startTimestamp = strtotime($task->start_time); 
        $endTimestamp = strtotime("+$task->duration_minutes minutes", $startTimestamp); 
        $endTime = date('H:i', $endTimestamp);

        return view('tasks.task_show', compact('task', 'endTime'));
    }
}