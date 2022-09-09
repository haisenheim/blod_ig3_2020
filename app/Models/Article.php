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

    public function auteur(){
        return $this->belongsTo('App\User','user_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag','articles_tags');
    }

   /* public function getStatusAttribute(){
        if($this->active){
            return "En ligne";
        }
        return "Hors ligne";
    }
    */
    public function getStatusAttribute(){
        $data = ['color'=>'danger','name'=>'Hors ligne'];
        if($this->active){
            $data = ['color'=>'success','name'=>'En ligne'];
        }
        return $data;
    }
}
