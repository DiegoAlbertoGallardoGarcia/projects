<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    protected $fillable=['id', 'name', 'logo', 'number'];

    public function books(){
    	return $this->hasMany('App\Book');
    }
}
