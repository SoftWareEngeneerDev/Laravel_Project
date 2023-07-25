<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ajouterproduit(){
        return view('Admin.ajouterproduit');
    }
    public function produit(){
        return view('Admin.produit');
    }
    
    
    public function sauverproduit(Request $request){

    }
}
