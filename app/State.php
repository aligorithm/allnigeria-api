<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $guarded = [];
    public function lgas(){
        return $this->hasMany(Lga::class);
    }
}
