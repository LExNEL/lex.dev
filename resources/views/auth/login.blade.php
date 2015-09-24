@extends('app')

@section('content')
<div class="form-group">
{!! Form::open(['url' => 'auth/login']) !!}
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! Form::label('remember', 'Remember Me') !!}
    {!! Form::checkbox('remember', null, ['class' => 'form-control']) !!}
    {!! Form::submit('Login', ['class' => 'form-control']) !!}
{!! Form::close() !!}
</div>
@stop
