@extends('layout.master')
@section('content')
{{ Form::open() }} 
<div class="content">
<h1>{{Lang::get('strings.Login')}}</h1>
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
        
        <button class="btn btn-success" type="submit" value="Login">{{Lang::get('strings.Login')}}</button>

        </form>
    </div>
</div>
{{ Form::close() }} 
@stop 
