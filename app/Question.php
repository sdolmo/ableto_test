<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question'
    ];

    public function answers()
    {
        return $this->hasOne('App\Answer');
    }
}
