<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training Studio - Free CSS Template</title>
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-training-studio.css') }}">

    </head>
    
    <body>
    
    @include('preloader')
    
    @include('layout/header/nav')
    
    @include('layout/content/banner/banner')

    @include('layout/content/program/program')

    @include('layout/content/become_member/become_member')

    @include('layout/content/class/class')
    
    @include('layout/content/schedule/schedule')

    @include('layout/content/testimoni/testimoni')
    
    @include('layout/content/contact/contact')
    
    @include('layout/footer/footer')

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('assets/js/mixitup.js') }}"></script> 
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

  </body>
</html>