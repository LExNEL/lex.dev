<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {!! Html::style('style/bootstrap.css') !!}
        {!! Html::style('style/style.css') !!}
        {!! Html::script('script/bootstrap.js') !!}
        {!! Html::script('script/jquery.js') !!}
        {!! Html::script('script/script.js') !!}
        <title>Главня</title>
    </head>
    <body>
        <div id="frame">
            @include('temp._header')
            <div id="content">
                @yield('content')
                @yield('content_right')
                @yield('content_left')
            </div>
        </div>
    </body>
</html>
