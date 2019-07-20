<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
