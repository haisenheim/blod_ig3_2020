<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Lignevente;
use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index(){

        $ventes = Vente::all();
        //dd($ventes);
        return view ('Ventes/index')->with(compact('ventes'));
        //return view ('Ventes/index');
    }


public function creer(){
        $articles = Article::all()->where('active',1);
        return view ('Ventes/creer')->with(compact('articles'));
    }

    public function enregistrer(Request $request){
      //dd($request);
        $lignes = $request->panier;
        $vente = Vente::create([
            'employe_id' =>1,
            'name' => date('Hyis')
        ]);

        for($i=0;$i<count($lignes);$i++){
            Lignevente::create([
                'vente_id'=>$vente->id,
                'article_id' =>$lignes[$i]['id'],
                'quantity' =>$lignes[$i]['qty'],
            ]);

            $article = Article::find($lignes[$i]['id']);
            $article->quantite = $article->quantite - $lignes[$i]['qty'];
            $article->save();
        }

       return  response()->json($vente->id);
    }

    public function show($id){
        $vente = Vente::find($id);

        return view ('Ventes/show')->with(compact('vente'));
    }



}
