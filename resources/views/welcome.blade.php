@extends('layouts.app')

@section('titre', 'Accueil ')

@section('content')
<div class="">

    <h1>Bienvenue</h1>

    <div class="row">
        @if (empty($films))
            Il n'y a pas de film.
        @endif










        @foreach($films as $film)


                <div class="col s12 m7 l4">
                    <div class="card large">
                        <div class="card-image">

                            <img src="img/film/{{ $film->image }}">

                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                <li>{{ $film->titre }}</li></span>
                            <p><li>{{ $film->synopsis }}</li></p>
                        </div>
                        <div class="card-action">
                        <span><i class="material-icons">star</i></span>
                                <span><i class="material-icons">star</i></span>
                                        <span><i class="material-icons">star</i></span>
                                                <span><i class="material-icons">star</i></span>
                                                        <span><i class="material-icons">star</i></span>

                            <a class="waves-effect waves-light btn grey lighten-1 right"{{ link_to_route('film.show', 'Détail', $film->id) }}</a>
                        </div>
                    </div>
                </div>




        @endforeach

    </div>




</div>
@endsection
