<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function meeting()
    {
        return $this->belongsTo('App\Meeting');
    }

    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}
