<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function show($id){
        $article = Article::find($id);
        //dd($article);
        return view('FrontOffice.Articles.show')->with(compact('article'));
    }

    public function getCategorie($id){
        $categorie = Categorie::find($id);
        //dd($article);
        return view('FrontOffice.Articles.categorie')->with(compact('categorie'));
    }
}
