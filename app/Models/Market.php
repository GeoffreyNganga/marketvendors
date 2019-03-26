<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = [
        'name', 'location', 'open_days',
    ];

    //
    public function vendors()
    {
        return $this->belongsToMany('App\Models\Vendor');
    }
}
