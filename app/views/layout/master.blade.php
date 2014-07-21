<!DOCTYPE html>
<html>
    <head>
        {{ HTML::style('css/style.css'); }}
    </head>
    <body>
        @include('layout.header')
        
        <div> 
          @yield('content')
        </div>
         
        @include('layout.footer')
    </body>     
</html> 