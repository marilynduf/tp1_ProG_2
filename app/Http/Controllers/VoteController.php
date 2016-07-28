<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Critique;
use App\Http\Requests;
use DB;

class VoteController extends Controller
{
  public static function nbVotePourFilm($id_film) {
    
    $critique = DB::table('critiques')
                        ->select(DB::raw('SUM(vote) as vote, COUNT(vote) as count'))
                        ->where('id_film', '=', $id_film)
                        ->get();
    return $critique[0];

    // if($resultSet['count']>0) {
    //   $donnee['avg'] = $resultSet['vote']/$resultSet['count'];
    //   $donnee['totalvote'] = $resultSet['count'];
    // } else {
    //   $donnee['avg'] = 0;
    //   $donnee['totalvote'] = $resultSet['count'];
    // }
    // return $donnee;

  }
  //function vote()
  // if(isset($_REQUEST['type'])) {
  //   if($_REQUEST['type'] == 'save') {
  //     $vote = $_REQUEST['vote'];
  //     $film = $_REQUEST['film'];
  //     $query = "INSERT INTO rating (film, vote) VALUES ('$film', '$vote')";
  //
  //   }
  // }
}
