<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urllink extends Model
{
    public function scopeGetUrlAll($query){
        return $query->get();
    }

    public function scopeGetUrlTitle($query, $id){
        return $query->where('id', $id)->pluck('urlTitle')->toArray();
    }
}
