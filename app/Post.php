<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {

        //$this->comments()->create(compact('body', 'post_id', 'user_id'));


        //hack
       Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => $this->id
        ]);  
    }
}
