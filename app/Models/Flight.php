<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    public function airline() {
        return $this->belongsTo(Airline::class);
    }

    public function origin() {
        return $this->belongsTo(City::class,'origin_city');
    }

    public function destination() {
        return $this->belongsTo(City::class,'destination_city');
    }


}
