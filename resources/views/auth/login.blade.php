@extends('app')
@section('content')

    {!! Form::open (['url'=>'admin']) !!}
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
{!! Form::close()!!}
@include('errors/list')

@stop