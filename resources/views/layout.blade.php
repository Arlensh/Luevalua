<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{{ asset('img/luevalua_logo.png') }}}">
    <title>@yield('title', 'luevalua, por defecto')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>

<body>

    @include('partials.nav')
    @include('partials.sidebar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @include('partials.session-status')

        @yield('content')
    </main>

    @include('partials.whatsapp')

</body>

</html>
