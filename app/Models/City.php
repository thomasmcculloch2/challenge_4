<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function outgoing_flights() {
        return $this->hasMany(Flight::class,'origin_city')->count();
    }

    public function incoming_flights() {
        return $this->hasMany(Flight::class,'destination_city')->count();
    }
}
