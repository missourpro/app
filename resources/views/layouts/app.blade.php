<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>


    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body id="home" data-spy="scroll" data-target="#navbar" data-offset="50">
<div id="app" class="flex-center position-ref full-height">


    <div class="content">
        @yield('content')

    </div>
</div>

<script src="{{mix('js/app.js')}}"></script>
</body>
</html>