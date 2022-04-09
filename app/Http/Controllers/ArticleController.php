<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::all();
       // dd($articles);
        return view ('Articles/index')->with(compact('articles'));
    }

    public function creer(){

       // dd($articles);
       $cats = Categorie::all();
        return view ('Articles/creer')->with(compact('cats'));
    }

    public function enable($id){
        $article = Article::find($id);
        $article->active = 1;
        $article->save();

        return redirect()->back();
    }

    public function disable($id){
        $article = Article::find($id);
        $article->active = 0;
        $article->save();
        return redirect()->back();
    }

    public function enregistrer(Request $request){
       // dd($request);
       $article = new Article();
       $article->designation = $request->designation;
       $article->quantite = $request->quantite;
       $article->prix = $request->prix;
       $article->categorie_id = $request->categorie_id;
       $article->save();

       return redirect('/articles');
    }






}
