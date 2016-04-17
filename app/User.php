<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

    public function reports() {
        return $this->hasMany('Report');
    }

    public function searches() {
        return $this->hasMany('Search');
    }    

    public function purchase() {
        return $this->hasMany('Purchase');
    }