<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $a=5;
        $b=13;
        $c= $a+$b;
        return view("Home/index")->with(["p1"=>$a, "p2"=>$b, "p3"=>$c]);
    }

    public function show($id){
        return "Vous avez envoyé".$id;
    }

    public function store(Request $request) {
        echo "Vous voulez stocker à partir de Homecontroller";
        dd($request);
    }

}
