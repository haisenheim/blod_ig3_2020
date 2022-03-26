<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Livraison;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    public function index(){

        $livraisons = Livraison::all();
        return view ('Livraisons/index')->with(compact('livraisons'));
        //return view ('Livraisons/index');
    }

    public function creer(){
        $articles = Article::all();
        return view ('Livraisons/creer')->with(compact('articles'));
    }

    public function enregistrer(Request $request){
        //dd($request);
       $livraison = new Livraison();
       //$livraison->nom = $request->nom;
       $livraison->quantiy = $request->quantity;
       //$livraison->nombrevente = $request->nombrevente;
       $livraison->save();
       return redirect('/livraisons');
    }




}
