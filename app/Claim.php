<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    public function assets()
    {
        return $this->belongsToMany(Asset::class);
    }
}
