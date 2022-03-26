<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
   protected $guarded = ['id'];
    //protected $fillable = ['designation', 'prix', 'quantite','category_id'];

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
}
