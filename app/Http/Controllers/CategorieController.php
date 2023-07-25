<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategorieController extends Controller
{
    //
    public function ajoutercategorie(){
        return view('Admin.ajoutercategorie');
    }

    public function categorie(){
        return view('Admin.categorie');
    }

    public function sauvercategorie(Request $request){

        $categorie = new Category();
        $categorie->Category_name = $request->input('Category_Name');
        return redirect('\ajoutercategorie')->with('status', 'La categorie '.$categorie->Category_name.
        ' à été ajouter avec succès');

    }
}
