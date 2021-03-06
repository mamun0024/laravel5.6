<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urllinkdata extends Model
{
    protected $fillable = [
        'url_id',
        'pTitle',
        'pImg',
        'pDesc'
    ];

    /**
     * Display a listing of the Specific ID's.
     *
     * @return object
     */
    public function scopeGetUrlLinks($query, $id){
        return $query->where('url_id', $id)->orderBy('created_at', 'desc')->get();
    }
}
