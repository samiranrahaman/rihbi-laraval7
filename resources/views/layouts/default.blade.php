<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
  
<body>
  <header class="header">
  @include('includes.header')
    
  </header>
  <!--<div id="main" class="row">-->
           @yield('content')
   <!--</div>-->

  <!-- <footer class="row">-->
       @include('includes.footer')
   <!--</footer>-->
  



</body>
</html>
