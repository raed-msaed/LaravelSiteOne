<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Unkown Page')</title>

    <link rel="stylesheet" href="{{ url('css/style.css') }}"> {{-- {{asset('css/style.css')}} --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

</head>

<body class="antialiased">

    {{-- Start Navigation Bar --}}
    @include('layout.navbar')
    {{-- End Navigation Bar --}}

    @yield('content')


    @include('layout.sidebar')

    <script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>

</html>
