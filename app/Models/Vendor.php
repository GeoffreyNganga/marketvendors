<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'user_id', 'phone', 'rating',
    ];

    //
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function markets()
    {
        return $this->belongsToMany('App\Models\Markets');
    }
}
