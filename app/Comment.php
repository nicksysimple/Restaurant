<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

     protected $fillable= ['usercomment','user_id','restaurant_id'];

     public function restaurant(){

       return $this->belongsTo(Restaurant::class);
     }

}
