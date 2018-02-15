<?php

namespace App;

use Carbon\Carbon;

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

  //SCOPE FILTER PARA O TESTE - Erro undefined index: month
/*    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month'])
        {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year'])
        {
            $queru->whereYear('created_at', $year);
        }
    } */
}
