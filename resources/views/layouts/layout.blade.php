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
<body class="flex flex-col h-screen">

    <header class="h-16 flex sm:flex-row flex-col justify-between items-center w-full px-4 sm:px-20 bg-gradient-to-r from-teal-800 to-teal-500 text-white">
        <a href="{{ route('home') }}" class="text-2xl font-semibold self-center sm:self-center mt-1 sm:mt-0">Agenda Versatech</a>
        <ul class="flex gap-4 items-center font-semibold self-center sm:self-center mb-1 sm:mb-0">
            @auth
                <li class="hover:text-teal-100"><a href="{{ route('tasksList') }}">Atividades</a></li>
                <li class="hover:text-teal-100"><a href="#">Funcionários</a></li>
            @endauth
            @guest
                <li class="hover:text-teal-100 ml-6"><a href="/login">Entrar</a></li>
                <li class="hover:text-teal-100"><a href="/register">Cadastrar</a></li>
                @endguest
            @auth
                <li class="hover:text-teal-100">
                    <form action="/logout" method="post">
                        @csrf
                        <a  href="/logout"
                            onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="ml-8">
                            Sair
                        </a>
                    </form>
                </li>
            @endauth
        </ul>
    </header>

    <main class="ml-4 sm:mx-20 py-4 flex-grow">
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