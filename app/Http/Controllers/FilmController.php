<?php

namespace App\Http\Controllers;

use App\Classement;

use App\Film;

use Intervention\Image\Facades\Image as Image;
<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
=======

>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
use Illuminate\Support\Facades\File;

use App\Http\Requests\CreateFilmRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;


class FilmController extends Controller


{

    public function __construct()
    {
       //$this->middleware('auth'); // Ceci limite l'accès à la modif des film aux membres seulement.
    }

    // Create function -----------------------------------

    function index()
    {

        $film = Film::all();
<<<<<<< HEAD

=======
        
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
        return view('film.index')->withFilms($film);
    }

    // Create function -----------------------------------

    public function create()
    {

        $classements = Classement::lists('id','id');
        $film = new Film();
<<<<<<< HEAD

=======
        
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
        return view('film.create', compact('classements', 'film'));
    }


    // Store function -----------------------------------

    function store(CreateFilmRequest $request)
    {

        $donnees = $request->all();

<<<<<<< HEAD
        $image = Input::file('image');
        $nomImage = $image->getClientOriginalName();
        $destinationPath = public_path('img/film/'.$nomImage);
        Image::make($image->getRealPath())-> resize(100, 100)-> save($destinationPath);

        // $uploadReussi = $image->move($destinationPath, $nomImage);
=======
        $image = $donnees['image'];

        $destinationPath = 'film/img';

        $extension = $image->getClientOriginalExtension();

        $nomImage = rand(11111, 99999) . '.' . $extension;

        $uploadReussi = $image->move($destinationPath, $nomImage);
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6

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

<<<<<<< HEAD
        if ($image)
=======
        if ($uploadReussi)
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
        {

<<<<<<< HEAD
            flash()->success('Un nouveau film à été Ajouté!'); // success() ajoute une classe qui donne la couleur verte à la box message

            return Redirect::to('film');
=======
              return Redirect::to('film');
              echo 'Le film a été ajouté à la liste!';
        }
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305

        }


    }


    // Edit function -----------------------------------
<<<<<<< HEAD

=======
    
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
    function edit($id)
    {

        $film = Film::findOrFail($id);

        $classements = Classement::lists('id', 'id');

        return View::make('film.edit', compact('film', 'classements'));

    }

    function update($id, CreateFilmRequest $request)
    {
<<<<<<< HEAD
=======
        $film = Film::findOrFail($id);
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305

        $donnees = $request->all();

        $film = Film::findOrFail($id);



       if($request->hasFile('image')) {

           $oldimage = $film->image;

           $destinationPath = 'film/img';

<<<<<<< HEAD
           $image = Input::file('image');
           $nomImage = $image->getClientOriginalName();
           $destinationPath = public_path('img/film/'.$nomImage);
           Image::make($image->getRealPath())-> resize(100, 100)-> save($destinationPath);
          //  $this->save($destinationPath, $nomImage, 75);
=======
           $image = $donnees['image'];

           $extension = $image->getClientOriginalExtension();

           $nomImage = rand(11111, 99999) . '.' . $extension;

               $image = Image::make($image)->resize(100, 100)->encode('jpg');

           $image->save($destinationPath, $nomImage, 75);
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6


           $film->image = $nomImage;

           File::delete($destinationPath. '/' .$oldimage);
       }


        $film->titre = $donnees['titre'];
        $film->annee = $donnees['annee'];
        $film->id_classement = $donnees['id_classement'];
        $film->duree = $donnees['duree'];
        $film->synopsis = $donnees['synopsis'];
        $film->acteurs = $donnees['acteurs'];
        //$film->created_at => Carbon\Carbon::now()

        $film->save(); // J'ai essayé la fonction update() mais elle ne semble pas fonctionner: $film->update($request->all());, donc j'utilise simplement la fonction save()




        flash()->success('Le film à été modifié!'); // success() ajoute une classe qui donne la couleur verte à la box message

        return Redirect::to('film');





<<<<<<< HEAD
=======
        return view('film');
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
    }

    // Show function -----------------------------------

    public function show($id)
    {
        $film = Film::findOrFail($id);

        return View::make('film.show', compact('film'));
    }
<<<<<<< HEAD

    public function destroy($id)
    {
        $film = Film::findOrFail($id);

        $film->delete();

        flash('Le film à été supprimé'); // success() ajoute une classe qui donne la couleur verte à la box message

        return Redirect::to('film');
    }
=======
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
}
