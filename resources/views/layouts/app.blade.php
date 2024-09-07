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

    <header class="h-16 flex md:flex-row flex-col justify-between items-center w-full px-4 sm:px-20 bg-gradient-to-r from-teal-800 to-teal-500 text-white">
        <a href="{{ route('home') }}" class="text-2xl font-semibold self-center sm:self-start md:self-center mt-1 md:mt-0">Agenda Versatech</a>
        <ul class="flex gap-4 items-center font-semibold self-center sm:self-end md:self-center mb-1 md:mb-0">
            <li class="hover:text-teal-100"><a href="{{ route('taskIndex') }}">Atividades</a></li>
            <li class="hover:text-teal-100"><a href="#{{-- {{ route('employeeList') }} --}}">Funcionários</a></li>
            <li class="hover:text-teal-100 ml-6"><a href="#">Entrar</a></li>
            <li class="hover:text-teal-100"><a href="#">Cadastrar</a></li>
        </ul>
    </header>

    <main class="ml-4 sm:mx-20 py-4">
        @if (Session::has('success'))
            <div class="px-2 py-1 mb-4 bg-teal-500 rounded-md text-white">{{Session::get('success')}}</div>
        @endif
            
        @if (Session::has('error'))
            <div class="px-2 py-1 mb-4 bg-teal-900 rounded-md text-white">{{Session::get('error')}}</div>
        @endif
        
        @yield('main')
    </main>

    <footer class="py-4 flex justify-center w-full bg-teal-800 text-white">
        <p>Agenda Versatech &copy; 2024</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>