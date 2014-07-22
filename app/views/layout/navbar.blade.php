<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>

<body>
    <nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="test">Test</a></li>
            <li><a href="#" >Registration</a></li>
        </ul>
        
        <ul class="nav pull-right">
            <li class="dropdown" id="accountmenu">
                @if(Auth::check())
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">" {{ Auth::user()->first_name}} " <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout">Logout</a></li>
                    </ul>
                @endif
            </li>
        </ul>
    </div>
</nav> 
</body>
</html>