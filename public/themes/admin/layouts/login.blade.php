<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body class="hold-transition login-page">
        <div class="container">
            {!! Theme::content() !!}
        </div>
        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>