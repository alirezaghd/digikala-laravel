<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "{{url('/css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{url('/css/all.css')}}">

    <title>
        @yield('title')
    </title>

</head>

<body>

@include('header')

@yield('content')

@include('footer')

<script src="{{url('/js/bootstrap.js')}}"></script>
<script src="{{url('/js/bootstrap.bundle.js')}}"></script>
</body>

</html>
