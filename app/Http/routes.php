<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('ajout-film','HomeController@ajoutFilm');

Route::auth();

<<<<<<< HEAD
Route::resource('user', 'ProfileController');

=======
>>>>>>> a70be0ed88e0b50d1ca50223bb1a5871a1e3a5a6
//Route::auth('edit/{id}', 'ProfileController@editProfile');

Route::get('/', 'HomeController@index');

Route::get('confirmation', 'HomeController@confirmation');

Route::resource('film', 'FilmController');
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

<<<<<<< HEAD
Route::resource('critique', 'CritiqueController');


// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

=======
>>>>>>> f58b141dfae73097dae75577b3fb74e52c756305
// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('auth/logout', 'Auth\AuthController@logout');

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::post('/search', ['uses' => 'QueryController@search', 'as' => 'queries.search']);

// Route::resource('queries', 'QueryController');
