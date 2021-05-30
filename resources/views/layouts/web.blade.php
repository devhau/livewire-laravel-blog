<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
    @livewireStyles
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body x-data="{}">
    @include('shared/web/navbar')
    <main class="container-xxl my-md-4 bd-layout">
        @yield('content')
    </main>
    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
