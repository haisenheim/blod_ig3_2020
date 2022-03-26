<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Commande;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){

        $commandes = Commande::all();
        return view ('Commandes/index')->with(compact('commandes'));
       //return view ('Commandes/index');
    }


    public function creer(){
        $articles = Article::all();
        return view ('Commandes/creer')->with(compact('articles'));
    }

    public function enregistrer(Request $request){
        //dd($request);
       $commande = new Commande();
       $commande->nom = $request->nom;
       $commande->prixvente = $request->prixvente;
       $commande->nombrevente = $request->nombrevente;
       $commande->save();
       return redirect('/commandes');
    }





}
