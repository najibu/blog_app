<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id'];
    
    public function categories()
    {
      return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
