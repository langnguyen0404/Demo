<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>
    <header>
        <h1>@yield('titlePage')</h1>
    </header>
    @include('header')

    <main>
        @yield('main')
    </main>
     @include('footer')
</body>

</html>