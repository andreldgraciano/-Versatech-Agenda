@extends('layouts.app')
@section('title', 'Atividades')

@section('main')

    <div class="flex flex-col space-y-4">
        <div class="flex gap-4 flex-wrap">
            @foreach ($tasks as $task)
                <div class="shadow-md p-4 rounded-md w-[300px]">
                    <p><span class="text-lg font-semibold text-teal-500">{{$task->title}}</span><br>{{$task->description}}</p>
                    <hr class="p-0.5">
                    <p>{{$task->date}} | {{$task->start_time}}</p>
                    <p>{{$task->address}}</p>
                    <p></p>
                    <p>{{$task->duration_minutes}}</p>
                </div>
            @endforeach
        </div>
    
        <a class="h-10 w-36 flex items-center justify-center self-end bg-teal-500 rounded-md font-semibold text-white" href="{{ route('taskFormCreate') }}">Nova Atividade <ion-icon name="add-outline"></ion-icon></a>
    </div>

@endsection