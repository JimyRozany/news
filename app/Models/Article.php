<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //relationship between user table and article table 
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    //relationship between article table and like table 
    public function like(){
        return $this->hasMany('App\Models\Like','article_id');
    }
    public function comment(){
        return $this->hasMany('App\Models\Comment','article_id');
    }
}
