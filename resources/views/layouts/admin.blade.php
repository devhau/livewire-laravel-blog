<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle')</title>
    @livewireStyles
    <link href="{{ mix('/css/admin.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body x-data="{}">
    <div class="wrapper">
        @include('shared/admin/sidebar')
        <div class="main">
        @include('shared/admin/navbar')
            <main class="content">
                <div class="container-fluid p-0">                    
                   @yield('content')
                </div>
            </main>
        @include('shared/admin/footer')
        </div>
    </div>
    @livewireScripts
    <script src="{{ mix('/js/admin.js') }}"></script>
</body>

</html>
