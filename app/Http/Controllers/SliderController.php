<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function ajouterslider(){
        return view('Admin.ajouterslider');
    }
    public function slider(){
        return view('Admin.slider');
    }

    public function sauverslider(Request $request){
        
    }
}
