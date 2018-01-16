@extends('layout')
@section('title', 'Accueil')
@section('content')
        <h1>Modifier compétences</h1>
        <form method="POST" action="{{url('/gomodifinfo')}}">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	@foreach($skill as $value)
        		<p>{{ $value->name }}: <input type="text" name="pourcentage" value="{{ $value->pourcentage }}%"></p>
        	@endforeach
        	<button>Modifier</button>
        </form>
        
@endsection