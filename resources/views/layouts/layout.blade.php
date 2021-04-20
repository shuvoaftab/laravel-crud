<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Laravel Templating Experiment</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  </head>
  <body>
          @include('layouts.header')

          @yield("content")
          
          @include('layouts.services')
          @include('layouts.about')
          @include('layouts.features')
          @include('layouts.team')
          @include('layouts.pricing')
          @include('layouts.testimonials')
          @include('layouts.cta')
          @include('layouts.contact')
          @include('layouts.footer')
          @include('layouts.toTop')
          @include('layouts.jsIncludes')
    
          

    
      <!-- Preloader -->
      <!-- <div id="preloader">
        <div class="loader" id="loader-1"></div>
      </div> -->
      <!-- End Preloader -->
    
    
  </body>
</html>