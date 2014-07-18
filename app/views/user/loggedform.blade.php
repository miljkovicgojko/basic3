@extends('layout.master')

@section('content')

    <h2>Logged form!</h2><br>

    <a href="{{ URL::to('logout') }}">Logout</a>
 
@stop 

