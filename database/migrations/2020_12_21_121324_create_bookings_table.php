





<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('bookDate')->nullable();
            $table->integer('userId');
            $table->integer('food_id');
            $table->integer('typeId');
            $table->string('userName')->nullable();
        
            $table->integer('restaurantId');
            $table->integer('quantity');
            $table->double('price')->nullable();
            $table->date('paymentDate')->nullable();
            $table->string('paymentType')->nullable();
            $table->string('time')->nullable();
            $table->boolean('isServed')->default(0);
            $table->boolean('isCooked')->default(0);
            $table->integer('numberOfSeat')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
   


