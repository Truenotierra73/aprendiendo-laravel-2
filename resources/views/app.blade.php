<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Aprendiendo Laravel</title>
</head>

<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('components.nav')
            @include('components.partials.session-status')
        </header>
        <main class="py-3">
            @yield('content')
        </main>
        <footer class="bg-white text-center text-black-50 shadow py-3">
            {{ config('app.name') }} - Copyright @ {{ date('Y') }}
        </footer>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
