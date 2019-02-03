<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $names = ["Mansh","HadaDaka","Parjanya"];
        //dd($names);
        return view('front.names')->with('names',$names);
    }

}
