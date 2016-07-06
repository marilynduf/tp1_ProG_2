<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Critique;

use App\Http\Requests;

use App\Http\Requests\CreateCritiqueRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class CritiqueController extends Controller
{

    public function create()
    {
        $critique = new Critique();

        return view('film.edit', compact('critique'));
    }

    function store(CreateCritiqueRequest $request)
    {

        $donnees = $request->all();

        $critique = new Critique();
        $critique->vote = $donnees['vote'];
        $critique->annee = $donnees['annee'];
        $critique->vote = $donnees['id_film'];
        $critique->annee = $donnees['id_utilisateur'];

        $critique->save();



            flash()->success('Un nouveau film à été Ajouté!'); // success() ajoute une classe qui donne la couleur verte à la box message

            return Redirect::to('film');


    }
}
