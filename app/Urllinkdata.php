<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urllinkdata extends Model
{
    public function scopeGetUrlLinks($query, $id){
        return $query->where('url_id', $id)->orderBy('created_at', 'desc')->get();
    }
}
