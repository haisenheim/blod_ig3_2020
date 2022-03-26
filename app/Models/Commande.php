<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    public $timestamps = false;
    protected $guarded = ['id'];

    public function fournisseurs(){
        return $this->hasMany('App\Models\Fournisseur');
    }
}
