@extends('layout')
@section('title', 'Mail')
@section('content')
        <h2>Mails:</h2>
        @if(Session::has('resultat')) 
        <div style="text-align: center; color: green;">
        {{Session()->get('resultat')}}
        </div>
        @endif
        <span>Nombre d'email reçu: {{$nombre}}</span>
            {{ $email->appends(['Vue' => 'Mails'])->links() }}
        @foreach($email as $key => $value)
        <article class="mailhome">
            <p><span class="fontawesome-envelope-alt"></span> {{ $value->mail }}</p>
            <p><span class="fontawesome-user"></span> {{ $value->name }}</p>
            <p><span class="fontawesome-calendar"></span> {{ $value->created_at }}</p>
            <p><span class="gras">Sujet: </span>{{ $value->subjet }}</p>
            <p><span class="gras">Message: </span>{{ $value->content }}</p>
            <span  data-id="{{$value->id }}" class="fontawesome-trash supprart"></span>
        </article>
        @endforeach
@endsection