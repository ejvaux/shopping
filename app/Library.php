<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public function user()
    {
        return $this->belongsto('App\User');
    }
    public function product()
    {
        return $this->belongsto('App\Product');
    }
}
