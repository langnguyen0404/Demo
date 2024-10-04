<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('Admin/css/style1.css') }}" />
    <script src="https://kit.fontawesome.com/4b1791cf7d.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <h1>@yield('titlePage')</h1>
    </header>
    @include('admin.HeaderAD')

    <main>
        @yield('main')
    </main>
    <!-- @include('footer') -->

</body>