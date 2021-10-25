<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category(){
        return $this->belongsTo('App\Category'); // App\category::class
    }
    public function comments() {
        return $this->hasMany('App\Comment'); 
    }
    
}
