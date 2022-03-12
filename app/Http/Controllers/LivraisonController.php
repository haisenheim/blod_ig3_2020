<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    public function index(){

        //$articles = Article::all();
        //return view ('Articles/index')->with(compact('articles'));
        return view ('Livraisons/index');
    }






}
