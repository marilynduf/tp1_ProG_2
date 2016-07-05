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

                            <img src="../img/{{ $film->image }}">

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

                        </div>
                    </div>
                </div>


        </div>


    </div>
    @endsection



