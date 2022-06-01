<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    function service(){
        $services = ['It Support', 'File Servers', 'Computer Repair', 'Cloud Service', 'Data Security', 'Virtual Desktop', 'Network Equipment'];
        $i=1;
        return view('service')->with('services', $services)->with('no', $i);
    }
}
