<?php

namespace App;

use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function ticket()
    {
      return $this->belongsTo('Ticket');
    }

    protected $guarded = ['id'];
}
