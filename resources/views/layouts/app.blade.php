<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Versatech - @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/favicon.ico/">
</head>
<body>

    <header class="h-16 flex justify-around items-center w-full bg-teal-600 text-white">
        <a href="{{ route('home') }}" class="text-2xl font-semibold">Agenda Versatech</a>
        <ul class="flex gap-4 items-center font-semibold">
            <li class=""><a href="{{ route('taskList') }}">Atividades</a></li>
            <li class=""><a href="#{{-- {{ route('employeeList') }} --}}">Funcionários</a></li>
            <li class="ml-6"><a href="#">Entrar</a></li>
            <li class=""><a href="#">Cadastrar</a></li>
        </ul>
    </header>

    <main class="mx-20">
        @yield('main')
    </main>

    <footer class="py-4 flex justify-center w-full bg-teal-800 text-white">
        <p>Agenda Versatech &copy; 2024</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>