@extends('layouts.app')
@section('title', 'Atividades')

@section('main')

    <div class="space-y-4 py-4">
        <div class="flex gap-4">
            @foreach ($tasks as $task)
                <div class="shadow-md p-4 rounded-md w-1/2">
                    <p><span class="text-lg font-semibold">{{$task->title}}</span> - {{$task->description}}</p>
                    <hr class="p-0.5">
                    <p>{{$task->date}} | {{$task->start_time}}</p>
                    <p>{{$task->address}}</p>
                    <p></p>
                    <p>{{$task->duration_minutes}}</p>
                </div>
            @endforeach
        </div>

        <a class="h-10 w-36 flex items-center justify-center bg-green-500 rounded-md font-semibold text-white" href="{{ route('taskCreate') }}">Nova Atividade <ion-icon name="add-outline"></ion-icon></a>
    </div>

@endsection