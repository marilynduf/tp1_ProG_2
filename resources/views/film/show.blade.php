@extends('layouts.app')

@section('titre', 'Accueil ')

@section('content')
    <div class="">

        <h3>Détails du film: {{ $film->titre }}</h3>

        <div class="row">



            <a class="waves-effect waves-light btn grey lighten-1 right" {{ link_to_route('film.edit', 'Modifier', $film->id ) }} </a>

                <div class="col s12 m7 l4">
                    <div class="card large">
                        <div class="card-image">

                            <img src="../img/film/{{ $film->image }}">

                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                <li>{{ $film->titre }}</li></span>
                            <p><li>{{ $film->synopsis }}</li></p>
                        </div>
                        <div class="card-action">
<<<<<<< HEAD
                          <form method="post">
      <fieldset class="starability-growRotate">


        {!! Form::label('rate5','Amazing: 5 stars') !!}
        {!! Form::radio('vote','5', false, array('id'=>'rate5')) !!}
        {!! Form::label('rate4','Amazing: 4 stars') !!}
        {!! Form::radio('vote','4', false, array('id'=>'rate4')) !!}
        {!! Form::label('rate3','Amazing: 3 stars') !!}
        {!! Form::radio('vote','3', false, array('id'=>'rate3')) !!}
        {!! Form::label('rate2','Amazing: 2 stars') !!}
        {!! Form::radio('vote','2', false, array('id'=>'rate2')) !!}
        {!! Form::label('rate1','Amazing: 2 stars') !!}
        {!! Form::radio('vote','1', false, array('id'=>'rate1')) !!}

      </fieldset>
    </form>
=======
                            <span><i class="material-icons">star</i></span>
                            <span><i class="material-icons">star</i></span>
                            <span><i class="material-icons">star</i></span>
                            <span><i class="material-icons">star</i></span>
                            <span><i class="material-icons">star</i></span>

>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
                        </div>
                    </div>
                </div>


        </div>


<<<<<<< HEAD
    </div>
    @endsection
<<<<<<< HEAD
=======



>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
=======
@stop
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
