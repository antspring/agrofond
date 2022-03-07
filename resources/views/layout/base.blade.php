<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Агрофонд Курган</title>
    <link href="img/favicon.png" rel="icon" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
@include('components.header')

@include('components.nav')

@yield('content')

@include('components.footer')

@include('components.footnav')

@include('components.popup')

<link href="slick/slick.css" rel="stylesheet" type="text/css">
<link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/inputmask.js"></script>
<script src="js/jquery.inputmask.js"></script>
<script src="js/main.js"></script>
</body>
</html>
