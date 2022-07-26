<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    //
   protected $guarded = ['id'];
   protected $table = 'articles_tags';
   public $timestamps = false;

    public function article(){
        return $this->belongsTo('App\Models\Article');
    }

    public function tag(){
        return $this->belongsTo('App\Models\Tag');
    }


}
