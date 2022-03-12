<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{

    public $timestamps = false;

    public function commandes(){
        return $this->hasMany('App\Models\Commande');
    }
}
