<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'text',
        'title',
        'body',
        'photo_id',
        'category_id',
        'user_id'
    ];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function category(){

        return $this->belongsTo('App\category');
    }

    public function photo(){

        return $this->belongsTo('App\photo');
    }
}
