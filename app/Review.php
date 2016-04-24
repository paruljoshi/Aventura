<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'user_id', 'event_id', 
    ];

    public function events(){
        $this->belongsTo('App\Event');
    }

    public function users(){
        $this->belongsTo('App\User');
    }

}
