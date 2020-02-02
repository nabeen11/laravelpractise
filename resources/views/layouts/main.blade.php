<!doctype html>
<html lang="en">
  <head>
    <title>NabinPortofolio</title>
    <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontAwesome CSS -->
    <link rel= "stylesheet" href= "{{asset('/css/all.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel= "stylesheet" href= "{{asset('/css/style.css')}}">
  </head>
  <body>

  @include('layouts.navbar')

    @yield('content')

  @include('layouts.footer')


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type = "text/javascript" src="{{asset('/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script type = "text/javascript" src="{{asset('/js/popper.min.js')}}"></script>
    <script type = "text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>