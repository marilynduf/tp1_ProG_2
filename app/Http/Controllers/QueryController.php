<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use DB;
use App\Http\Requests;

class QueryController extends Controller
{
    // public function recherche(Request $request)
    // dd($request->all());
    // code cource: https://tutorialedge.net/laravel-5-simple-site-search-bar
    public function search(Request $request)
{
   	// Gets the query string from our form submission
    $query = Request::input('search');
    // Returns an array of articles that have the query string located somewhere within
    // our articles titles. Paginates them so we can break up lots of search results.
  	$films = DB::table('films')->where('titre', 'LIKE', '%' . $query . '%')->paginate(10);

	// returns a view and passes the view the list of articles and the original query.
    return view('search', compact('films', 'query'));
 }
}
