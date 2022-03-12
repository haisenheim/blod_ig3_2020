<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index(){

        $fournisseurs = Fournisseur::all();
        return view ('Fournisseurs/index')->with(compact('fournisseurs'));
    }


    public function creer(){

         return view ('Fournisseurs/creer');
     }

     public function enregistrer(Request $request){
         //dd($request);
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->nom;
        $fournisseur->telephone = $request->telephone;
        $fournisseur->save();
        return redirect('/fournisseurs');
     }




}
