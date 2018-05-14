<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urllink extends Model
{
    protected $fillable = [
        'urlTitle'
    ];

    /**
     * Display a listing of the All resource.
     *
     * @return object
     */
    public function scopeGetUrlAll($query){
        return $query->get();
    }

    /**
     * Display a Specific ID's Title.
     *
     * @return array
     */
    public function scopeGetUrlTitle($query, $id){
        return $query->where('id', $id)->pluck('urlTitle')->toArray();
    }
}
