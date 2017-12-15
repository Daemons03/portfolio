@extends('layout')
@section('title', 'Qui suis-je')
@section('content')
        <h1>Dagnière Maxime</h1>
        <p id="presenapropo">Je me présente Maxime Dagnière. Je suis actuellement en formation développeur Web. Ayant toujours été attiré par l'informatique, le jour ou j'ai du choisir un secteur de reconverson c'est tout naturelement que j'ai choisi la voie de développeur web.</p>
        <section id="apropo">
        	<article id="infoperso">
        		<h2>Formations</h2>
        		@foreach($formation as $key => $value)
            		<p><span class="gras">- {{ $value->name }}</span>{{ $value->formation }}</p>
        		@endforeach
        		<h2>Expériences professionnelles</h2>
        		@foreach($experience as $key => $value)
            		<p><span class="gras">- {{ $value->date }}</span>{{ $value->experience }}</p>
        		@endforeach
        	</article>
        	<article id="competence">
        		<h2>Compétences</h2>
        		<h3 class="titrelangage">Langages Client/Serveurs</h3>
        		 @foreach($skill as $key => $value)
	       			<div class="progress">
				 	 	<div class="progress-bar" role="progressbar" style="width: {{$value->pourcentage}}%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">{{$value->name}}</div>
					</div>
        		@endforeach
				<h3 class="titrelangage">Framework, Librairies Client/Serveurs</h3>
				<div class="progress">
			 	 	<div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">JQuery</div>
				</div>
				<div class="progress">
			 	 	<div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Ionic</div>
				</div>
				<div class="progress">
			 	 	<div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Angular</div>
				</div>
				<div class="progress">
			 	 	<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Bootstrap</div>
				</div>
				<div class="progress">
			 	 	<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Laravel</div>
				</div>
        	</article>
        </section>
@endsection