<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function participants()
    {
        return $this->hasMany('App\Participant');
    }

    public function results()
    {
        return $this->hasMany('App\Result');
    }
}
