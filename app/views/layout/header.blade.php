<header>
    <div>
        <h2>{{Lang::get('strings.Basic knowledge course')}}</h2>
    </div>

    <div class="image">
        <img id="myImage" onclick="changeImage()" src="images/logo_red.gif">
    </div>
  
    <div>
       @include('layout.navbar')
    </div> 
    
    @if(Auth::check())
        <div class="lang">
            <a href="{{ URL::to('language/en')}}">EN</a> <a href="{{URL::to('language/srb')}}">SRB</a>
        </div>
        <div class="logout">
            <a href="{{ URL::to('logout') }}">{{Lang::get('strings.Logout')}}</a>
        </div>
        <p> {{Lang::get('strings.User')}}: "{{ Auth::user()->first_name," ",Auth::user()->last_name }}" </p>
    @endif
</header>
