@extends('layouts.app')

@section('titre', 'Ajout-film')

@section('content')


    <h1>Ajouter un film</h1>


    {!! Form::open([$film, 'action' => 'FilmController@store', 'files' => 'true']) !!}

    {!! Form::label('titre','Titre: ') !!}
    {!! Form::text('titre') !!}

    {!! Form::label('annee','Année de production: ') !!}
    {!! Form::text('annee') !!}

    {!! Form::label('image','Image:') !!}
    {!! Form::file('image') !!}

    {!! Form::label('id_classement','Classement: ') !!} 
    {!! Form::select('id_classement', $classements, $film->classement) !!}
    <?php var_dump($classements); ?>

    {!! Form::label('duree','Durée: ') !!}
    {!! Form::text('duree') !!}

    {!! Form::label('synopsis','Synopsis: ') !!}
    {!! Form::textarea('synopsis') !!}

    {!! Form::label('acteurs','Acteurs: ') !!}
    {!! Form::text('acteurs') !!}

    {!! Form::submit('Ajouter') !!}

    {!! Form::close() !!}

    @if (count($errors) > 0)
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif



@stop

