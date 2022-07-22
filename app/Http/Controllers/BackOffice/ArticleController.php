<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        echo "Liste des articles";
        //return view('BackOffice/Articles/index');
    }
}
