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

    public function filteredLibraries(){
        return $this->belongsToMany('App\Library')
            ->wherePivot('tag_id', $this->id) //Kreuztabelle einbinden zu Abfrage
            ->orderBy('updated_at', 'DESC');

    }
}
