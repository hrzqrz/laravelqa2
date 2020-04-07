<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //Attributes 
    protected $fillables = ['title', 'body'];

    //Relationship between Question and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
