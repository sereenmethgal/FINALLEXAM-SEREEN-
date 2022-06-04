<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maincat extends Model
{
    public function category()
    {
        return $this->hasMany(category::class);
    }
}
