<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'parent_id', 'name', 'email', 'message'];

    public function replies()
    {

        return $this->hasMany(Comment::class, 'parent_id');

    }
}
