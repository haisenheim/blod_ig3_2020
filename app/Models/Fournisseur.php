<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{

    public $timestamps = false;
    protected $guarded = ['id'];

    public function commandes(){
        return $this->hasMany('App\Models\Commande');
    }
}
