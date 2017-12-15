@extends('layout')
@section('title', 'Connection')
@section('content')
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
@endsection