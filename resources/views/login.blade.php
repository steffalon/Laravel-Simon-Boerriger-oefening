<?php 
// $users = DB::select('select * from users');
// var_dump($users);
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>QuizCenter - Login</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @include('main.link')
        <link rel="stylesheet" href="{{ mix('css/login.css')}}">
    </head>
    <body>
    <div class="content">
    @include('main.nav')
        <main class="content__main">
            <section class="content__main__form">
                {{ Form::open(array('url' => 'login')) }}
                {{ $errors->first('username') }}
                {{ $errors->first('password') }}
                <br>
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', '', array('placeholder' => 'Username', 'autofocus')) }}
                <br>
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', array('placeholder' => 'password')) }}
                <br>
                <br>
                {{ Form::submit('Login') }}
                {{ Form::close() }}
            </section>
        </main>
    @include('main.footer')
    </div>
    </body>
</html>
