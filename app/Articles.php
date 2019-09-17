<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';

    public function tags()
    {
        return $this->hasMany('App\Tags');
    }
}
