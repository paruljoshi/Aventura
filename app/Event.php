<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc','country','ticket',
        ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public function users(){
        $this->belongsTo('App\User');
    }

    public function reviews(){
        $this->hasMany('App\Review');
    }

}
