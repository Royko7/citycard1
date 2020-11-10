<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title-block')</title>
</head>
<body>
@auth()
    @include('inc.header_logined')

@endauth
@guest()
    @include('inc.header')

@endguest
        <main class="py-4">


            <div class="container">
{{--
{{--                        @yield('content')--}}
                <р2>фывфыввфы</р2>
{{--
{{--            </div>--}}

        </main>
<div class="footer  ml-5 pr-4">
    @include('inc.footer')

</div>
{{--    </div>--}}
</body>
</html>
