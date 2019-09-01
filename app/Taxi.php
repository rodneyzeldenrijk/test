<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    public function ritten()
    {
    	return $this->hasMany(Ritten::class);
    }
}

