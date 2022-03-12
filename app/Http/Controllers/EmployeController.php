<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){

        $employes = Employe::all();
        return view ('Employes/index')->with(compact('employes'));
       // return view ('Employes/index');
    }

    public function creer(){

        return view ('Employes/creer');
    }

    public function enregistrer(Request $request){
        //dd($request);
       $employe = new Employe();
       $employe->nom = $request->nom;
       $employe->prenom = $request->prenom;
       $employe->telephone = $request->telephone;
       $employe->save();
       return redirect('/employes');
    }






}
