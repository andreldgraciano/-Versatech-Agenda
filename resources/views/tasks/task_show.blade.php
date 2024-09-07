@extends('layouts.app')
@section('title', 'Detalhes')

@section('main')

    <div class="flex gap-4 flex-wrap justify-center sm:justify-start">
            <div class="shadow-lg p-4 rounded-md w-[260px]">
                <p><span class="text-lg font-semibold text-teal-500">{{$task->title}}</span><br>{{$task->description}}</p>
                <hr class="p-0.5">
                <p>{{$task->date}} | {{$task->start_time}}</p>
                <p>{{$task->address}}</p>
                <p></p>
                <p>{{$task->duration_minutes}} minutos</p>
            </div>
    </div>

    <div class="flex gap-4">
        <a  class="h-10 w-36 mt-4 flex gap-2 items-center justify-center self-end bg-teal-500 rounded-md font-semibold text-white" 
        href="{{ route('taskIndex') }}">Voltar <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        {{-- <a  class="h-10 w-36 mt-4 flex gap-2 items-center justify-center self-end bg-teal-800 rounded-md font-semibold text-white" 
            href="{{ route('taskFormCreate') }}">Excluir <ion-icon name="remove-outline"></ion-icon>
        </a> --}}
    </div>

@endsection