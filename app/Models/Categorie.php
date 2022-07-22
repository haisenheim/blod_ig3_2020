<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    //
   protected $guarded = ['id'];
    //protected $fillable = ['designation', 'prix', 'quantite','category_id'];

    public function articles(){
        return $this->hasMany('App\Models\Article','category_id');
    }
}
