<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property mixed role
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','is_active','photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function photo(){
        return $this->belongsTo('App\photo');
    }

//    public function setPasswordAttribute($password){
//
//        if(!empty($password)){
//
//            $this->attributes['password'] = bcrypt($password);
//        }
//    }

//    public function isAdmin(){
//
//        if($this->role->name == "Administrator"){
//            return true;
//
//        }
//
//        return false;
//    }

        public function posts(){

            return $this->hasMany('App\Post');
        }

        public function search($keyword){

        }

}


