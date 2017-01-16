<?php

namespace App;

use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
      'title',
      'content',
      'slug',
      'status',
      'user_id'
    ];

    public function user()
    {
      $this->belongsTo('User');
    }

    public function getTitle()
    {
      return $this->title;
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
