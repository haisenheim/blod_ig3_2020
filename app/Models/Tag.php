<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
   protected $guarded = ['id'];
   public $timestamps = false;
    //protected $fillable = ['designation', 'prix', 'quantite','category_id'];

  public function articles(){
      return $this->belongsToMany('App\Models\Article','articles_tags');
  }
}
