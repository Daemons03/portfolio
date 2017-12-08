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
        <h2>Une question, un projet?</h2>
         {{ Form::open(['url' => '/gocontact']) }}
          <div>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </div>
        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::email('email') }}
        </div>
        <div>
            {{ Form::label('sujet', 'Sujet:') }}
            {{ Form::text('sujet') }}
        </div>
        <div>
            {{ Form::label('message', 'Message:') }}
            {{ Form::textarea('message') }}
        </div>
        <div>{{ Form::submit('Envoyer') }}</div>
    {{ Form::close() }}


        @include('footer')
    </body>
</html>