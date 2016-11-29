<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<nav>
    @section('navbar')
    <a href="">Home</a> |
    <a href="">About</a>
    @show
</nav>
<div>
    @yield('content')
</div>

<footer>
    this is my footer
</footer>
</body>
</html>