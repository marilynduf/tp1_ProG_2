@extends('layouts.app')

@section('titre', 'search ')

@section('content')
    <div class="">



        <div class="row">
            @if (empty($films))
                Il n'y a pas de film.
            @endif

            @foreach($films as $film)

                {{ $id = $film->id }}



                <div class="col s12 m7 l4">
                    <div class="card large">
                        <div class="card-image">

                            <img src="img/{{ $film->image }}">

                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                <li>{{ $film->titre }}</li></span>
                            <p><li>{{ $film->synopsis }}</li></p>
                        </div>
                        <div class="card-action">
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
    <a class="waves-effect waves-light btn grey lighten-1 right"{{ link_to_route('film.show', 'Détail', $film->id) }}</a>
                        </div>
                    </div>
                </div>




            @endforeach

        </div>




    </div>
@endsection
