<?php

use App\Models\Airline;
use App\Models\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airline_city', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Airline::class)->constrained('airlines')->onDelete('cascade');
            $table->foreignIdFor(City::class)->constrained('cities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airline_city');
    }
};
