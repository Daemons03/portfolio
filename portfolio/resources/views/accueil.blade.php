@extends('layout')
@section('title', 'Accueil')
@section('content')
        <h1>Besoin d'un développeur web, contactez-moi!</h1>
        <p class="texteaccueil">Du site statique pour présenté votre entreprise, au site avec une base de données, je suis là vous aidez dans vos projets du début à la conclusion.</p>
        <h2>Ma dernière réalisation</h2>
        <article class="projet">
            <img src="images/{{$projet[0]->image}}">
            <p><span class="gras">Title: </span>{{$projet[0]->title}}<br/><span class="gras">Date de création: </span>{{$projet[0]->date_creation}} à {{$projet[0]->date_fin_creation}}<br/><button><a href="/projet">Voir plus</a></button></p>
        </article>
@endsection

        

