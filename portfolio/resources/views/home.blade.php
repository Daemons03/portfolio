<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dagnière Maxime</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        @include('header')
        <h2>Derniers mails</h2>
        @foreach($email as $key => $value)
        <article class="mailhome">
            <p><span class="fontawesome-envelope-alt"></span> {{ $value->mail }}</p>
            <p><span class="fontawesome-user"></span> {{ $value->name }}</p>
            <p><span class="fontawesome-calendar"></span> {{ $value->created_at }}</p>
            <p><span class="gras">Sujet: </span>{{ $value->subjet }}</p>
            <p><span class="gras">Message: </span>{{ $value->content }}</p>
        </article>
        @endforeach


        @include('footer')
    </body>
</html>