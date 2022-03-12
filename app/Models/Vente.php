<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{

    public $timestamps = false;

    public function employes(){
        return $this->hasMany('App\Models\Employe');
    }
}
