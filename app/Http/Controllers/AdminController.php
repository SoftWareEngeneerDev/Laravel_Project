<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
        return view('Admin.dashboard');
    }

    public function commande(){
        return view('Admin.commande');
    }
}
