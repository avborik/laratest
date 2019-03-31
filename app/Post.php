<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];

    public function getTitleAttribute($value){
        return strtoupper($value);
    }

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtoupper($value);
    }
}
