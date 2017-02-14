<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function result()
    {
        return $this->belongsTo('App\Result');
    }

    public function subnotes()
    {
        return $this->hasMany('App\SubNote');
    }
}
