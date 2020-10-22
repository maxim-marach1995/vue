<!doctype html>
<html lang="en">
<head>
    <title>App Name - @yield('title')</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('bootstrap.min.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
