<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/layouts.css')}}">
</head>
<body>
    <nav class="header">
        <a href="" class="" href="{{ route('welcome')}}"><h1>Group 5</h1></a>
    </nav>
    <div>@yield('content')</div>
</body>
</html>
