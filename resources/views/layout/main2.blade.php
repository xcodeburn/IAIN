<!DOCTYPE html>
<html lang="en"> <!-- data-bs-theme="light" -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>IAIR 2| {{ $title }}</title>
</head>
<body>
@include('partials.navbar2')
<div class="container-fluid">
    <div class="slider-container">
        <div class="img-header">
            <img src="/img/1.jpg" alt="img1">
        </div>
    </div>
</div>
@yield('container2') <!-- ini nama yang akan diisi pada menu-menu nav-->
@include('partials.footer')
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>