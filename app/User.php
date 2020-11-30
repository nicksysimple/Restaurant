<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model  implements AuthenticatableContract 
{
	use Authenticatable;
    protected $fillable = ['username','password','email'];
}
