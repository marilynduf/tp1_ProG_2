@extends('layouts.app')

@section('titre', 'Ajout-film')

@section('content')

    <h1>Ajouter un film</h1>

    {!! Form::open(['url' => 'film.store', 'files' => true]) !!}

        {!! Form::label('titre','Titre: ') !!}
        {!! Form::text('titre') !!}<br>

        {!! Form::label('annee','Année de production: ') !!}
        {!! Form::text('annee') !!}<br>

        {!! Form::file('image','image: ') !!}
        {!! Form::file('image') !!}<br>

        {!! Form::label('classement','Classement: ') !!}
        {!! Form::text('classement') !!}<br>

        {!! Form::label('duree','Durée (min): ') !!}
        {!! Form::text('duree') !!}<br>

        {!! Form::label('synopsis','Synopsis: ') !!}
        {!! Form::text('synopsis') !!}<br>

        {!! Form::label('acteurs','Acteurs: ') !!}
        {!! Form::text('acteurs') !!}

        <!-- classement (provient de la BD...) -->

        <!-- selon le contexte -->
        {!! Form::submit('Ajouter') !!}
        {!! Form::submit('Modifier') !!}

    {!! Form::close() !!}

    @if (count($errors) > 0)
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@stop

@endsection
