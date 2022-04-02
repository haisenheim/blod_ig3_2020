<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{

   // public $timestamps = false;
    protected $guarded = ['id'];

    public function employe(){
        return $this->belongsTo('App\Models\Employe');
    }

    public function lignes(){
        return $this->hasMany('App\Models\Lignevente','vente_id');
    }

    public function getTotalAttribute(){
       $lignes = $this->lignes;
       $somme = 0;
        foreach($lignes as $ligne){
            $article = $ligne->article;
            $somme = $somme + $ligne->quantity * $article->prix;
        }
       return $somme;
    }
}
