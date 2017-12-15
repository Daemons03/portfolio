@extends('layout')
@section('title', 'Home')
@section('content')
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
@endsection