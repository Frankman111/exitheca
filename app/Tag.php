<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [

        'name', 'style'

    ];

    public function libraries(){
        return $this->belongsToMany('App\Library');
    }
}
