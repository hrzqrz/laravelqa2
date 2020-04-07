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

    //We have slug culomn in questions table and we dont want to fill it manually so we define this mutator 
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
