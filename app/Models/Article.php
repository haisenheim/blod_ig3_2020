<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
}
