<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>@yield('title', $appName)</title>

        @vite(['resources/js/app.js'])

        <meta name="description" content="" />

    </head>
    <body>
        <h1 class="text-center">{{ $appName }}</h1>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
