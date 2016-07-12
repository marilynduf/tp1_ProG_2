<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Critique;

use App\Http\Requests;

use App\Http\Requests\CreateCritiqueRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class CritiqueController extends Controller
{

    function index()
    {
     return view('welcome');
    }

    function store(CreateCritiqueRequest $request)
    {

        $donnees = $request->all();

        $critique = new Critique();
        $critique->vote = $donnees['vote'];
        $critique->commentaire = $donnees['commentaire'];
        $critique->id_film = $donnees['id_film'];
        $critique->id_utilisateur = Auth::user()->id;

        $critique->save();

            flash()->success('Une critique à été Ajoutée!'); // success() ajoute une classe qui donne la couleur verte à la box message

            return Redirect::to('film');


    }
}
