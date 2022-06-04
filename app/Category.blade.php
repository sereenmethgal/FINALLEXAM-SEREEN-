<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function maincat()
    {
        return $this->belongsTo(maincat::class);
    }

}
