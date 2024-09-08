@extends('layouts.layout')
@section('title', 'Home')

@section('main')

    <div class="flex flex-col space-y-4">
        <h2 class="text-teal-500 text-xl">Minhas Atividades</h2>
        <hr>

        <div class="flex flex-wrap gap-4 items-center">
            <a  class="h-10 w-10 flex items-center justify-center bg-teal-500 rounded-md font-semibold text-white" 
                href="{{ route('taskFormCreate') }}"><ion-icon name="add-outline" size="large"></ion-icon>
            </a>

            <p class="-ml-2 text-slate-600">Adicionar Atividade</p>

            <form action="{{route('home')}}" method="get" class="flex items gap-2">
                <input type="date" id="searchDate" name="searchDate" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                <button type="submit" class="h-10 w-20 flex items-center justify-center bg-teal-500 rounded-md font-semibold text-white"">Buscar</button>
            </form>

            <form action="{{route('home')}}" method="get" class="flex items gap-2">
                <input type="text" id="searchTitle" name="searchTitle" placeholder="Buscar por título..." class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
                <button type="submit" class="h-10 w-20 flex items-center justify-center bg-teal-500 rounded-md font-semibold text-white"">Buscar</button>
            </form>
            
            <a  class="h-10 w-32 flex items-center justify-center bg-teal-500 rounded-md font-semibold text-white" 
                href="{{ route('home') }}">Limpar Filtros
            </a>
        </div>

        @if (isset($searchDate))
            <p class="text-lg">Buscando por atividades na data: {{date('d/m/Y', strtotime($searchDate))}}</p>
            <hr>
        @elseif (isset($searchTitle))
            <p class="text-lg">Buscando por atividades com titulo: {{$searchTitle}}</p>
            <hr>
        @endif
        

        <div class="flex gap-4 flex-wrap justify-center sm:justify-start">
            @if (count($tasks) == 0 && ($searchDate || $searchTitle))
                <h4>Nenhuma atividade correspondente à busca.</h4>
            @elseif (count($tasks) == 0)
                <h4>Não possui atividades agendadas.</h4>
            @else
                @foreach ($tasks as $task)
                    <a href="/atividades/{{$task->id}}" class="relative shadow-lg hover:shadow-teal-200 p-4 rounded-md w-[260px] space-y-1">
                        <p class="text-lg font-semibold text-teal-500">{{$task->title}}</p>
                        <hr class="p-0.5">
                        <p>{{$task->description}}</p>
                        <ul class="flex justify-between">
                            <li class="flex items-center gap-1"><ion-icon name="calendar-outline"></ion-icon>{{date('d/m/Y', strtotime($task->date))}}</li>
                            <li class="flex items-center">|</li>
                            <li class="flex items-center gap-1"><ion-icon name="time-outline"></ion-icon>{{ date('H:i', strtotime($task->start_time)) }}</li>
                        </ul>
                    </a>
                @endforeach
            @endif
        </div>
    </div>

@endsection