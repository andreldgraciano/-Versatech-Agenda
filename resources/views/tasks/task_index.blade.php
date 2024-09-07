@extends('layouts.app')
@section('title', 'Atividades')

@section('main')

    <div class="flex flex-col space-y-4">
        <div class=". flex gap-4 flex-wrap justify-center sm:justify-start">
            @foreach ($tasks as $task)
                <div class="relative shadow-lg p-4 rounded-md w-[260px]">
                    <p><span class="text-lg font-semibold text-teal-500">{{$task->title}}</span><br>{{$task->description}}</p>
                    <hr class="p-0.5">
                    <p>{{$task->date}} | {{$task->start_time}}</p>
                    <a href="/atividades/{{$task->id}}" class="absolute top-2 right-8 flex items-center gap-2 hover:text-teal-700 text-teal-900"><ion-icon name="eye" size="large"></ion-icon></a>
                </div>
            @endforeach
        </div>
    
        <a  class="h-10 w-36 flex items-center justify-center self-end bg-teal-500 rounded-md font-semibold text-white" 
            href="{{ route('taskFormCreate') }}">Nova Atividade <ion-icon name="add-outline"></ion-icon>
        </a>
    </div>

@endsection