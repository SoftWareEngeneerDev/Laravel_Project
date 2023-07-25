<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function home(){
        return view('Client.home');
    }

    public function paiement(){
        return view('Client.checkout');
    }

    public function shop(){
        return view('Client.shop');
    }

    public function panier(){
        return view('Client.cart');
    }

    public function signup(){
        return view('Client.signup');
    }

    public function client_login(){
        return view('Client.login');
    }
}
