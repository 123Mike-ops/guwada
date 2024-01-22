<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('image')->nullable();
            $table->decimal('rating')->nullable();
            $table->string('currency');
            $table->string('approximateDeliveryTime');
            $table->string('address');
            $table->string('fullAddress')->nullable();
            $table->decimal('ZIPCode')->nullable();
            $table->string('longtude');
            $table->string('latitude');
            $table->string('chargeType');
            $table->string('pricePerKm');
            $table->string('maxDeliveryDistance')->nullable();
            $table->decimal('cancelationFee')->nullable();
            $table->string('minOrderPrice');
            $table->string('minOrderAmount');
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
        Schema::dropIfExists('restaurants');
    }
}
