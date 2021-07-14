<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Trang chủ</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontawesome.com -->
    <script src="https://kit.fontawesome.com/3d60f2faba.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendors/use/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fontawesome.com -->
    <script src="https://kit.fontawesome.com/3d60f2faba.js" crossorigin="anonymous"></script>
    <!-- Date -->
    <link href="{{ asset('vendors/use/css/datepicker.css') }}" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('vendors/use/css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/use/css/blog.css') }}" rel="stylesheet">
    
  </head>
  <body >
    
<header style="background: #1B4A7A;">
    @include('user.partials.header')
</header>

<main >
    @yield('content')
  <!-- FOOTER -->
  @include('user.partials.footer')
</main>
 
  </body>

      <!-- Date -->
  

</html>
