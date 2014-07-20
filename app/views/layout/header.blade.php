<header>
    <div>
        <h2>{{Lang::get('strings.Basic knowledge course')}}</h2>
    </div>

    <div>
        {{HTML::image('images/logo_red.gif','alt-text')}}
    </div>
    @if(Auth::check())
        <div>
            <a href="{{ URL::to('language/en')}}">EN</a> <a href="{{URL::to('language/srb')}}">SRB</a><br><br> 
        </div>
        <div>
            <a href="{{ URL::to('logout') }}">{{Lang::get('strings.Logout')}}</a><br>
        </div>
        <p> {{Lang::get('strings.User')}}: "{{ Auth::user()->first_name," ",Auth::user()->last_name }}" </p><br><br><br><br>
    @else
        <div class="logout">
            <a href="{{ URL::to('login') }}">{{Lang::get('strings.Login')}}</a><br><br><br><br>
        </div>
    @endif
</header>
