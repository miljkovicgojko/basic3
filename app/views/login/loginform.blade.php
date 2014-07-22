@extends('layout.master')

@section('content')

{{ Form::open() }} 

<div class="content">
    <h1>{{Lang::get('strings.Login')}}</h1>

    <div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
    </div>

    <div>
        <?php echo '<form method="post" action="' . URL::to('login') . '">'; ?>
        {{Lang::get('strings.Email')}}:<br>
        {{ Form::text('email', Input::old('email'), array(
                    'placeholder' => 'email@emai.com', 
                    'id' => 'email', 
                    'name' => 'email' )) 
        }}
        <br><br>

        {{Lang::get('strings.Password')}}:<br>
        {{ Form::password('password', array(
                    'id' => "password", 
                    'name' => "password" )) 
        }}
        <br><br>
        
        {{ Form::submit( Lang::get('strings.Login'), array('class' => 'btn btn-success'))}}
        <div>
            <p>Need an account? {{HTML::link('account/signup', 'Signup here!')}}</p>
        </div>
        </form>
    </div>
</div>
{{ Form::close() }} 
@stop 
