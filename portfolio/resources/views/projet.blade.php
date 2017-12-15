@extends('layout')
@section('title', 'Réalisation')
@section('content')
        <h2>Mes réalisations</h2>
         <span>Nombre de projet réalisé: {{$nombre}}</span>
        <article class="pagina">
            {{ $projet->appends(['Vue' => 'Projet'])->links() }}
        </article>
         @foreach($projet as $key => $value)
        <article class="projet">
            <img src="images/{{$projet[0]->image}}">
            <p><span class="gras">Title: </span>{{$value->title}}<br/><span class="gras">Date de création: </span>{{$value->date_creation}} à {{$value->date_fin_creation}}<br/><span class="gras">Description: </span>{{$value->description}}</p>
        </article>
        @endforeach
@endsection