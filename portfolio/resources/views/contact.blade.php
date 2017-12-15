       
@extends('layout')
@section('title', 'Connection')
@section('content')
      <h2>Une question, un projet?</h2>
        @if ($errors->any())
            <div style="text-align: center; color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif(Session::has('envoimail')) 
            <div style="text-align: center; color: #001a00;">
                {{Session()->get('envoimail')}}
            </div>
        @endif
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
@endsection