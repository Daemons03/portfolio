@extends('layout')
@section('title', 'Qui suis-je')
@section('content')
        <h1>DAGNIERE Maxime</h1>
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
        		 @foreach($skill as $key => $value)
                    <label>{{$value->name}}</label>
                    <div class="progress">
                        @if($value->pourcentage <= 25)
                            <div class="progress-bar rougebc" role="progressbar" style="width: {{$value->pourcentage}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif(($value->pourcentage > 25) && ($value->pourcentage <= 50))
                            <div class="progress-bar orangebc" role="progressbar" style="width: {{$value->pourcentage}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif(($value->pourcentage > 50) && ($value->pourcentage <= 75))
                            <div class="progress-bar jaunebc" role="progressbar" style="width: {{$value->pourcentage}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($value->pourcentage > 75)
                            <div class="progress-bar vertbc" role="progressbar" style="width: {{$value->pourcentage}}%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                    </div>

        		@endforeach
        	</article>
        </section>
@endsection