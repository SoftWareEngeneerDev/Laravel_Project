<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/home', 'PagesController@home');

// Route::get('/services', 'PagesController@services');

// Route::get('/apropos', 'PagesController@apropos');

Route::get('show/{id}', 'PagesController@show');

Route::get('/user', 'PagesController@user');

Route::post('/sauverUser', 'PagesController@sauverUser');

Route::get('/detail', 'PagesController@detail');

Route::get('inform/{id}', 'PagesController@inform');

Route::get('inform/modif/{id}', 'PagesController@modif');

Route::get('inform/supp/{id}', 'PagesController@supp');

Route::post('modifieruser', 'PagesController@modifieruser');

Route::get('supp/{id}', 'PagesController@supp');

Route::get('/home', 'PagesController@home');

Route::get('/services', 'PagesController@services');

Route::get('/apropos', 'PagesController@apropos');

Route::get('/create', 'PagesController@create');

Route::post('/sauverproduit', 'PagesController@sauverproduit');

Route::get('show/edit/{id}', 'PagesController@edit');

Route::get('show/delete/{id}', 'PagesController@delete');

Route::post('modifierproduit', 'PagesController@modifierproduit');
//{{--------------------------client route services-------------------------------------}}

Route::get('/home', 'ClientController@home');

Route::get('/paiement', 'ClientController@paiement');

Route::get('/shop', 'ClientController@shop');

Route::get('/panier', 'ClientController@panier');

Route::get('/signup', 'ClientController@signup');

Route::get('/client_login', 'ClientController@client_login');

// {{------------------------------Admin Route----------------------------------------}}

Route::get('/admin', 'AdminController@admin');
Route::get('/commande', 'AdminController@commande');


// {{------------------------------Categories Route----------------------------------------}}

Route::get('/ajoutercategorie', 'CategorieController@ajoutercategorie');
Route::post('ajoutercategorie/sauvercategorie', 'CategorieController@sauvercategorie');
Route::get('/categorie', 'CategorieController@categorie');

Route::get('/ajouterproduit', 'ProductController@ajouterproduit');
Route::get('/produit', 'ProductController@produit');
Route::post('sauverproduit', 'ProductController@sauverproduit');

Route::get('/ajouterslider', 'SliderController@ajouterslider');
Route::post('/sauverslider', 'SliderController@sauverslider');
Route::get('/slider', 'SliderController@slider');



// Route::get('/', function () {
//     //return "<h1> SAVOIR CODER UN ART <h1/>";
//     return view('welcome');
// });

