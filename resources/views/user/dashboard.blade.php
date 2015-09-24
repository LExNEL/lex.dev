@extends('app')

@section('content')
    <div class="content_title">Old Paste</div>
    @foreach($usermsg as $msg)
        <div class="">
            {{ $msg->text }}
        </div>
    @endforeach
    <br>
@stop

@section('content_right')
    <div id="content_right">
        <div class="content_title">All Paste</div>
        <div class="all_paste">
            @foreach($messages as $message)
            {!! Html::linkAction('MainController@show', $message->user["name"], [$message->url]) !!}<br>
            @endforeach
        </div>
    </div>
@stop

@section('content_left')
<div id="content_left">
<div class="content_title">New Paste</div>
{!! Form::open(['url' => '/dashboard', 'method' => 'post']) !!}
    <div class="textarea_border">
        {!! Form::textarea('text', null, ['class' => 'paste_textarea']) !!}
    </div>
    {!! Form::label('title', 'Add Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    <br>
    {!! Form::submit('Add text', ['class' => 'form-control']) !!}
{!! Form::close() !!}
<br>
{!! Html::linkAction('Auth\AuthController@getLogout', 'Logout', null, ['class' => 'form-control']) !!}
</div>
@stop
