<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div id="loader">
      <div id="loader-indicator"></div>
</div>
   <header class="wow animate__animated animate__slideInRight">
       @include('includes.header')
   </header>
   @include('includes.menu')
   <main>
           @yield('content')
   </main>
   <footer>
       @include('includes.footer')
   </footer>
   <script src="{{URL::asset('js/wow.min.js');}}"></script>
    <script src="{{URL::asset('js/main.js');}}"></script>
</body>
</html>
