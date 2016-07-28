@extends('layouts.app')

@section('titre', 'Modifier-film')

@section('content')


    <h1>Modifier un film</h1>

    <?php $image = $film->image ?>

    {{ $image }}


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





<h1>Ajouter une critique</h1>


@if(isset($critique))
    {!! Form::model($critique, ['method' => 'PATCH', 'files' => 'true', 'route' => ['critique.store', $critique->id]]) !!}
@else
    {!! Form::open(['route' => 'critique.store', 'files' => 'true']) !!}
@endif

{!! Form::label('Vote','Vote: ') !!}
    <fieldset class="starability-growRotate">


      {!! Form::label('rate5','Amazing: 5 stars') !!}
      {!! Form::radio('vote','5', true, array('id'=>'rate5')) !!}
      {!! Form::label('rate4','Amazing: 4 stars') !!}
      {!! Form::radio('vote','4', false, array('id'=>'rate4')) !!}
      {!! Form::label('rate3','Amazing: 3 stars') !!}
      {!! Form::radio('vote','3', false, array('id'=>'rate3')) !!}
      {!! Form::label('rate2','Amazing: 2 stars') !!}
      {!! Form::radio('vote','2', false, array('id'=>'rate2')) !!}
      {!! Form::label('rate1','Amazing: 2 stars') !!}
      {!! Form::radio('vote','1', false, array('id'=>'rate1')) !!}

    </fieldset>
    {!! Form::label('commentaire','Commentaire: ') !!}
    {!! Form::textarea('commentaire') !!}
    {!! Form::hidden('id_film', $film->id) !!}

    {!! Form::submit('Ajouter') !!}
    {!! Form::close() !!}


@if(isset($critique))
    {{ Form::open(array('url' => 'critique/' . $critique->id, 'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Supprimer', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
@endif

@if (count($errors) > 0)
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


@stop
