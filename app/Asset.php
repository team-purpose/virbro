<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
     public function claims()
    {
        return $this->belongsToMany(Claim::class);
    }

    public function medias()
    {
       return $this->hasMany(Media::class);
    }

    public function category()
    {
        return $this->belongsTo(Cartegory::class);
    }
}
