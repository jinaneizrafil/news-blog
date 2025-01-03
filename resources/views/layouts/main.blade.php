<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('head')
    @livewireStyles

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">
    @include('partials.header')
    <main class="flex-grow pt-[60px]">
        @yield('content')
    </main>
    @include('partials.footer')

    @livewireScripts


</body>

</html>
