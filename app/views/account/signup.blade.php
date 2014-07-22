@extends('layout.master')

@section('content')

<div class="container">
    @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
    @endif
</div>

{{ Form::open(array('id' => 'myForm', 'action' => 'account-create-post')) }}   
<div class="col-md-4 col-md-offset-4">

    <div class="form-group">
        {{ Form::label('first_name', 'First name') }}
        {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control', 'placeholder' => 'Enter your First name')) }}
        <span class="error-display">{{$errors->first('first_name')}}</span>
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last name') }}
        {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control', 'placeholder' => 'Enter your Last name')) }}
        <span class="error-display">{{$errors->first('last_name')}}</span>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Enter your email address')) }}
        <span class="error-display">{{$errors->first('email')}}</span>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Enter your password, min 6 characters and 1 number')) }}
        <span class="error-display">{{$errors->first('password')}}</span>
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm your password')) }}
        <span class="error-display">{{$errors->first('password_confirmation')}}</span>
    </div>

    <input type="submit" value="Create account" class="btn btn-success">
    {{ Form::token() }}
    {{ Form::close() }}
    
@stop   

@section('js')
{{ HTML::script('jquery.validate.pack.js');}}
{{ HTML::script('js/validation.js');}}
@stop