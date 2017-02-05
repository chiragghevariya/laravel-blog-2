<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //


    protected $upload = '/images/';

    protected $fillable =['file'];

    public function getFileAttribute($photo){

        return $this->upload . $photo;
    }
}

