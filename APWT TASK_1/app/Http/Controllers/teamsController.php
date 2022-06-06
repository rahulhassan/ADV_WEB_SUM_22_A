<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamsController extends Controller
{
    function details(){
        
        $dob = "10.12.12";
        return view('ourTeams', ['dob'=>$dob]);
    }
}
