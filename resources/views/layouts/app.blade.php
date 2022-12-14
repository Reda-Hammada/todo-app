<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon-32x32.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

    <title>@yield('title')</title>

</head>
<body>
    

    @yield('content')
    
    <script src="/js/app.js"></script>

</body>
</html>