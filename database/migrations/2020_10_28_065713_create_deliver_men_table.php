<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverMenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliver_men', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Phone');
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('vehicleType');
            $table->string('targaNumber');
            $table->string('vehicleImage')->nullable();
            $table->string('address');
            $table->string('DrivingLicenceImage');
            $table->string('LegalIdImage');
            $table->string('status')->default('active');
 
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
        Schema::dropIfExists('deliver_men');
    }
}
