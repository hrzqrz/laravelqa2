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

    public function getUrlAttribute()
    {
        return route('questions.show', $this->id);
    }

    public function getCreatedDateAttribute()
    {
      return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute()
    {
        if($this->answers > 0 )
        {
            if( $this->best_answer_id )
            {
                return "answered-accepted";
            }
            return "answered";
        }
        
        return "unanswered";
        
    }
}
