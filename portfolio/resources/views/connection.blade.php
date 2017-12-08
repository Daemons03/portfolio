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
        <h2>Connexion</h2>
        <div>
    {{ Form::open(['url' => '/goconnexion']) }}
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>
        <div>{{ Form::submit('Connexion') }}</div>
    {{ Form::close() }}


        @include('footer')
    </body>
</html>