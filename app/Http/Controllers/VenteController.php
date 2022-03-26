<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index(){

        $ventes = Vente::all();
        return view ('Ventes/index')->with(compact('ventes'));
        //return view ('Ventes/index');
    }


public function creer(){
        $articles = Article::all();
        return view ('Ventes/creer')->with(compact('articles'));
    }

    public function enregistrer(Request $request){
        //dd($request);
       $vente = new Vente();
       $vente->nom = $request->nom;
       $vente->prixvente = $request->prixvente;    
       $vente->nombrevente = $request->nombrevente;
       $vente->employe_id = $request->employe_id;
       $vente->save();
       return redirect('/ventes');
    }



}
