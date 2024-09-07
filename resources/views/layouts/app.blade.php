<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header class="py-4 flex justify-center w-full bg-blue-400 text-white">
        <h1>Agenda Versatech</h1>
    </header>

    <main>
        @yield('main')
    </main>


    <footer class="py-4 flex justify-center w-full bg-black text-white">
        <p>Agenda Versatech &copy; 2024</p>
    </footer>

</body>
</html>