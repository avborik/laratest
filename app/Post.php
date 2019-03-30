<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // use SoftDeletes;

    // protected $dates = ['deleted_at'];
    // protected $fillable = [
    //     'title', 'body', 'votes', 'is_admin'
    // ];
    // public function user(){
    //     return $this->belongsTo('App\User');
    // }
    public function image(){
        return $this->morphMany('App\image','imageable');
    }

}
