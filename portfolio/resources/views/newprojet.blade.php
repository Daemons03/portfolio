@extends('layout')
@section('title', 'Newprojet')
@section('content')
        {{ Form::open(array('url' => '/goprojet','files'=>'true')) }}
            <p>{{ Form::file('image') }}</p>
            <p> {{ Form::label('title', 'Titre:') }}
            {{ Form::text('title') }}</p>
            <p>{{ Form::label('datecrea', 'Début de création:') }}
            {{ Form::text('datecrea') }}</p>
            <p>{{ Form::label('datefincrea', 'Fin de création:') }}
            {{ Form::text('datefincrea') }}</p>
            <p>{{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}</p>
            <p>{{ Form::submit('Enregistrer') }}
        {{ Form::close() }}
@endsection