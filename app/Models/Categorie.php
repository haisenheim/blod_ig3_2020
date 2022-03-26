<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = ['id'];
    public function articles(){
        return $this->hasMany('App\Models\Article');
    }
}
