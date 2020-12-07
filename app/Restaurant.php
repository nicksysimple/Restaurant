<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
  protected $fillable = ['name','email','address'];

	public function comments(){

		return $this->hasMany(Comment::class);
	}


}
