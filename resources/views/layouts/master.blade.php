<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!-- IE Compatibility Meta -->
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- First Mobile Meta -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>@yield('webtitle')</title>
     <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
     <link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
     <link href="https://fonts.googleapis.com/css?family=Amiri|Bree+Serif|Cairo&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

     <div id="app">
           <!--static nav-->
         <navbar-component ></navbar-component>
          <!--static nav-->

           <!--daynamic content-->
         <main role="main">
            @yield('webcontent')
          </main>
           <!--daynamic content-->

            <!--static footer-->
         <footer-component></footer-component>
         <!--static footer-->



     </div>





    <script src="{{ asset('js/app.js') }}"></script>
    @if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.js"></script>
<script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
   @endif
</body>
</html>
