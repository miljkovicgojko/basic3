<!DOCTYPE html>
<html>
    <head>
        {{ HTML::style('css/style.css'); }}
        {{ HTML::style('css/bootstrap.min.css'); }}
        {{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js'); }}
    </head>
    <body>
        @include('layout.header')
        <div> 
          @yield('content')
        </div>
         
        @include('layout.footer')
    </body>  
    {{ HTML::script('http://code.jquery.com/jquery-1.11.0.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
    {{ HTML::script('js/main.js'); }}
</html> 