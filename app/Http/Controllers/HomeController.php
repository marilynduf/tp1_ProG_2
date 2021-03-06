<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Film;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\VoteController;
=======
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
=======
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmation()
    {

        return view('confirmation');
    }

    public function index()
    {
        $films = Film::all();
<<<<<<< HEAD
        foreach ($films as $key => $value) {
          //echo $value;
          $vote = VoteController::nbVotePourFilm($key);
          
        }
        return view('welcome')->with(['films' => $films, 'vote' => $vote]);
=======

        return view('welcome')->withFilms($films);
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
    }
    public function showLogin()
<<<<<<< HEAD
    {
        // show the form
        return View::make('auth.login');
    }
=======
{
    // show the form
    return View::make('auth.login');
}
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
    public function doLogin()
    {
    // validate the info, create rules for the inputs
    $rules = array(
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
        return Redirect::to('login')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {

        // create our user data for the authentication
        $userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

        // attempt to do the login
        if (Auth::attempt($userdata)) {

            // validation successful!
            // redirect them to the secure section or whatever
            return Redirect::to('film');
            // for now we'll just echo success (even though echoing in a controller is bad)
            echo 'SUCCESS!';

        } else {

            // validation not successful, send back to form
            return Redirect::to('login');

        }

    }
}
    public function doLogout()
{
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
}

}
