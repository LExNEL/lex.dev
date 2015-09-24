@extends('app')

@section('content')
<div class="">
    @foreach($messages as $message)
        {{ $message->name }}
        {{ $message->text }}
    @endforeach
</div>
@stop
