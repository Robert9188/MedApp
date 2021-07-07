<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Day extends Model
{
    use HasFactory, SoftDeletes;

    public function horaires(){

        return $this->hasMany(Horaire::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
