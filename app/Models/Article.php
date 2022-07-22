<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
   protected $guarded = ['id'];

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie','category_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','articles_tags');
    }
}
