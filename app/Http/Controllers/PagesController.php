<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Utlisateur;
use Session;
class PagesController extends Controller
{
    //
     public function home() {
        return view('Pages.home');
    }

    public function apropos() {
        return view('Pages.apropos');
    }

    public function services() {

        $produits = Product::get();
        //$produits = Product::orderBy('product_name','asc')->paginate(2);

        // $produits = DB::table('products')
        //             //->paginate(1)
        //             ->inRandomOrder()
        //             //->limit(1)
        //             ->get();
        return view('Pages.services')->with('produits', $produits);
    }

    public function user(){
        return view('Pages.user');
    }

    public function sauverUser(Request $request){

        $user = new Utlisateur();
        $user->nom_user = $request->userName;
        $user->prenom_user = $request->userLastName;
        $user->age_user = $request->userAge;
        $user->mail_user = $request->userMail;
        $user->description_user = $request->descriptionUser;
        $user->save();
        
        Session::put('message', 'Le User' .$request->userName.  'a été inséré avec succès');
        return redirect('/user');
    }

    public function detail(){
        $details = Utlisateur::get();
        return view('Pages.detail')->with('details', $details);
    }

    public function inform($id){
        $informs = Utlisateur::find($id);
        return view('Pages.inform')->with('informs', $informs);
    }

    public function modif($id){
        $user = Utlisateur::find($id);
        return view('Pages.modifuser')->with('user', $user); 
    }

    public function modifieruser(Request $request){

        $user = Utlisateur::find($request->input('id'));

        $user->nom_user = $request->input('User_Name');
        $user->prenom_user = $request->input('User_LastName');
        $user->age_user = $request->input('User_Age');
        $user->mail_user = $request->input('User_mail');
        $user->description_user = $request->input('User_description');
        $user->update();

        return redirect('/user')->with('message', 'Le User'.'  '.$user->nom_user.'  '.'a été modifié avec succès');
    }

    public function supp($id){

        $user = Utlisateur::find($id);
        $user->delete();
        return redirect('/user')->with('message', 'Le User'.'  '.$user->nom_user.'  '.'a été supprimé avec succès');
    }

    public function show($id) {

        // print('<h1>ID du produit à afficher est</h1>'.$id);
        $produit = DB::table('products')
                 ->where('id', $id)
                 ->first();
        return view('Pages.show')->with('produit', $produit);
    }

    public function create(){
        return view('Pages.create');
    }

    public function sauverproduit(Request $request){

        // $this->validate($request, ['product_name' => 'required',
        //                            'product_price' => 'required',
        //                            'product_description' => 'required',
        //                            'product_image' => 'image|nullable|max:1999',]);

        // print('notre image est '.$request->file('product_image'));
        //Laravel eloquent
        $produit = new Product();
        $produit->product_name = $request->product_Name;
        $produit->product_price = $request->product_Price;
        $produit->product_description = $request->product_Description;
        $produit->save();
        /*$data = array();
        $data['product_name'] = $request->input('product_Name');
        $data['product_price'] = $request->input('product_Price');
        $data['product_description'] = $request->input('product_Description');
        DB::table('products')
          ->insert($data);*/
        Session::put('message', 'Le produit'  .$request->product_Name.  'a été inséré avec succès');
        return redirect('/create');
    }

    public function edit($id){
        $produit = Product::find($id);
        return view('Pages.editproduit')->with('produit', $produit);
    }
    public function modifierproduit(Request $request){
        //Laravel  Eloquent
        /*$produit = Product::find($request->input('id'));

        $produit->product_name = $request->input('product_Name');
        $produit->product_price = $request->input('product_Price');
        $produit->product_description = $request->input('product_Description');
        //la mise a jour des éléments insérés
        $produit->update();*/

        //Laravel querry Builder
        $data = array();
        $data['product_name'] = $request->input('product_Name');
        $data['product_price'] = $request->input('product_Price');
        $data['product_description'] = $request->input('product_Description');

        DB::table('products')
          ->where('id', $request->input('id'))
          ->update($data);

        return redirect('/services')->with('message', 'Le produit'.'  '.$request->product_Name.'  '.'a été modifié avec succès');
    }

    public function delete($id){
        $produit = Product::find($id);
        $produit->delete();

        return redirect('/services')->with('message', 'Le produit'.' '.$produit->product_name.' '.
        'a été suprimé avec succès');
    }
}