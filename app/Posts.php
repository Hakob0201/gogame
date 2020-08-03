<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public $table = 'posts';

    public function Seller(){
    	return $this->belongsTo('App\Users', 'user_id');
    }

    public function post_photo(){
    	return $this->hasMany("App\Photo", "post_id","id");
    }

    public function post_limit(){
        return $this->hasMany("App\Photo", "post_id","id")->limit(2);
    }
}
