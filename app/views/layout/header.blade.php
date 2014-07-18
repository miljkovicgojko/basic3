<header>
    <div>
        <h2>Basic knowledge course</h2>
    </div>
    
    <div>
        {{HTML::image('images/logo_red.gif','alt-text')}}
    </div>
    
    @if(Auth::check())
        <div>
            <a href="{{ URL::to('logout') }}">Logout</a><br>
        </div>
        <p> User: "{{ Auth::user()->first_name," ",Auth::user()->last_name }}" </p><br><br><br><br>
    @else
        <div class="logout">
            <a href="{{ URL::to('login') }}">Login</a><br><br><br><br>
        </div>
    @endif
</header>
