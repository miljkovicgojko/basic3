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
    {{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js'); }}
    {{ HTML::script('js/main.js'); }}
</html> 