@extends('layouts.app')
@section('title', 'Atividades')

@section('main')

    <div class="space-y-4 py-4">
        <p>Atividades Listadas</p>

        <a class="p-2 inline-block bg-green-500 rounded-md font-semibold text-white" href="{{ route('taskCreate') }}">Nova Atividade <ion-icon name="add-outline"></ion-icon></a>
    </div>

@endsection