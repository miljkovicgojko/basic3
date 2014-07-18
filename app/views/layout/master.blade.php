<!DOCTYPE html>
<html>
    <body>
        @include('layout.header')
        
        <div> 
          @yield('content')
        </div>
         
        @include('layout.footer')
    </body>     
</html> 