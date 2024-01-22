<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_confirmations', function (Blueprint $table) {
            $table->id();

            $table->integer('foodid');
            
            $table->integer('restaurantid');

            $table->integer('typeid');
            $table->integer('userId')->nullable();

            $table->boolean('isDeliverd')->default(0);
            $table->boolean('isCooked')->default(0);

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
        Schema::dropIfExists('order_confirmations');
    }
}
