<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{

    public $timestamps = false;

    public function ventes(){
        return $this->hasMany('App\Models\Vente');
    }
}
