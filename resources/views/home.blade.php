<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>QuizCenter - Home</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        @include('main.link')
        <link rel="stylesheet" href="{{ mix('css/home.css')}}">
    </head>
    <body>
    <div class="content">
    @include('main.nav')
        <main class="content__main">
            <section class="content__main__section">
                <section class="content__main__section__details">
                    <h1 class="content__main__section__details__head">Je eigen quiz in een minuut!</h1>
                    <section class="content__main__section__details__button">
                        <button class="content__main__section__details__button_r" onclick="location.href='/login'">Maak je eigen quiz</button>
                        <button class="content__main__section__details__button_b">Begin een quiz</button>
                    </section>
                </section>
            </section>
        </main>
    @include('main.footer')
    </div>
    </body>
</html>
