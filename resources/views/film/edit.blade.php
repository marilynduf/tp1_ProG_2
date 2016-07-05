@extends('layouts.app')

@section('titre', 'Modifier-film')

@section('content')


    <h1>Modifier un film</h1>



    {!! Form::model($film, ['method' => 'PATCH', 'files' => 'true', 'route' => ['film.update', $film->id]]) !!}

    {!! Form::label('titre','Titre: ') !!}
    {!! Form::text('titre') !!}

    {!! Form::label('annee','Année de production: ') !!}
    {!! Form::text('annee') !!}

    {!! Form::label('image','Image:') !!}
    {!! Form::file('image') !!}

    {!! Form::label('id_classement','Classement: ') !!} 
    {!! Form::select('id_classement', $classements, $film->classement) !!}

    {!! Form::label('duree','Durée: ') !!}
    {!! Form::text('duree') !!}

    {!! Form::label('synopsis','Synopsis: ') !!}
    {!! Form::textarea('synopsis') !!}

    {!! Form::label('acteurs','Acteurs: ') !!}
    {!! Form::text('acteurs') !!}

    {!! Form::submit('Modifier') !!}

    {!! Form::close() !!}



    {{ Form::open(array('url' => 'film/' . $film->id, 'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Supprimer', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}

    @if (count($errors) > 0)
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


@stop
