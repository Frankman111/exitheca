<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [

      'titel', 'beschreibung', 'user_id', 'verliehen', 'medium'

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
