<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function editProfile($id)
    {

            $user = User::findOrFail($id);

            return view('auth.modification')->withUser($user);
        
    }
}
