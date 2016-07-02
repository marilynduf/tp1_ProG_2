<?php

namespace App\Http\Controllers;

use App\Classement;

use App\Film;

use App\Http\Requests\CreateFilmRequest;

class FilmController extends Controller


{

    public function __construct()
    {
       //$this->middleware('auth'); // Ceci limite l'accès à la modif des film aux membres seulement.
    }

    // Create function -----------------------------------

    function index()
    {

        $films = Film::all();

        return view('film.index')->withFilms($films);
    }

    // Create function -----------------------------------

    public function create()
    {

        $classements = Classement::lists('id','id');
        $film = new Film();
        return view('film.create', compact('classements', 'film'));
    }


    // Store function -----------------------------------

    function store(CreateFilmRequest $request)
    {

        $donnees = $request->all();

        $image = $donnees['image'];

        $destinationPath = 'img';

        $extension = $image->getClientOriginalExtension();

        $nomImage = rand(11111, 99999) . '.' . $extension;

        $uploadReussi = $image->move($destinationPath, $nomImage);

        $film = new Film();
        $film->titre = $donnees['titre'];
        $film->annee = $donnees['annee'];
        $film->image = $nomImage;
        $film->id_classement = $donnees['id_classement'];
        $film->duree = $donnees['duree'];
        $film->synopsis = $donnees['synopsis'];
        $film->acteurs = $donnees['acteurs'];
        //$film->created_at => Carbon\Carbon::now()
        $film->save();

        //$films = Film::all();

        if ($uploadReussi)
        {

            return view('film')->withFilms($film);
        }


        //return Redirect::to('/')->with('message', 'Image uploaded successfully');
    }


    // Edit function -----------------------------------
    
    function edit($id)
    {

        $datafilm = Film::findOrFail($id);

        $classements = Classement::lists('id', 'id');
        //$film = new Film();
        //return view('film.modification')->withFilm($film, $datafilm, $classements);
        return view('film.modification', compact('classements', 'datafilm'));
    }

    function update($id, CreateFilmRequest $request)
    {
        $film = \App\Film::findOrFail($id);

        $film->update($request->all());

        return view('/');
    }

    // Show function -----------------------------------

    public function show($id)
    {
        $film = \App\Film::findOrFail($id);

        return view('film/show')->withFilm($film);
    }
}



