<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['id', 'title', 'isbn', 'author', 'category_id', 'career_id'];

    public function career(){
    	return $this->belongsTo('App\Careers');
    }
    
    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
