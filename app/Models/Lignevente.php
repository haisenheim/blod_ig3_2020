<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lignevente extends Model
{

   // public $timestamps = false;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function vente(){
        return $this->belongsTo('App\Models\Vente');
    }

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }
}
