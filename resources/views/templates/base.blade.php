<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- link allo script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('pageTitle')</title>
</head>

<body class="body">

    @include('partials.header')

    @yield('pageMain')

    @include('partials.footer')

</body>

</html>
