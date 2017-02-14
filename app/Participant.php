<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function meeting()
    {
        return $this->belongsTo('App\Meeting');
    }
}
