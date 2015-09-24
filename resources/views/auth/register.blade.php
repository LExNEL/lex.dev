@extends('app')

@section('content')
<div class="form-group">
{!! Form::open(['url' => 'auth/register']) !!}
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    {!! Form::label('password_confirmation', 'Confirm Password:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    <br>
    {!! Form::submit('Register', ['class' => 'form-control']) !!}
{!! Form::close() !!}
</div>
@stop
