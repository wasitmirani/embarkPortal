<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function getServices(){
        $services=Service::latest()->orderBy('name','ASC')->get();

        return response()->json(['services'=>$services]);
    }
}
