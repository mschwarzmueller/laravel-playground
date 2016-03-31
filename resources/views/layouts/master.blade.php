<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel ACL</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
</head>
<body>
@include('partials.header')
<div class="main">
    @yield('content')
</div>
</body>
</html>