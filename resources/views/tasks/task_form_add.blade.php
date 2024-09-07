@extends('layouts.app')
@section('title', 'Criar Atividade')

@section('main')

    <p class="text-lg font-semibold text-teal-500 text-center">Criar Atividade</p>
    <hr class="border-teal-100">
    <div class="w-full flex justify-center">
        <form action="{{ route('taskStore') }}" method="post" class="w-1/2 flex flex-col space-y-1">
            @csrf

            <label for="title">Atividade:</label> 
            <input type="text" name="title" id="title" placeholder="Reunião..." class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
    
            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" placeholder="Discutir sobre..." class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">

            <label for="address">Endereço:</label>
            <input type="text" name="address" id="address" placeholder="Rua, nº, Bairro..." class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
    
            <label for="date">Data:</label>
            <input type="date" name="date" id="date" value="2024-12-25" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">
    
            <label for="start_time">Horario: </label>
            <input type="time" name="start_time" id="start_time" value="00:00" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">

            <label for="duration_minutes">Duração (minutos):</label>
            <input type="number" step="5" name="duration_minutes" id="duration_minutes" placeholder="Duração em minutos..." class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow">

            <div class="flex pt-4 justify-between">
                <a href="{{ route('taskIndex') }}" class="h-10 w-36 flex items-center justify-center bg-teal-900 rounded-md font-semibold text-white">Cancelar</a>
                <button type="submit" class="h-10 w-36 bg-teal-500 rounded-md font-semibold text-white">Registrar</button>
            </div>
        </form>
    </div>

@endsection