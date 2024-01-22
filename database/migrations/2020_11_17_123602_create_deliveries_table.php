
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->date('deliveryDate')->nullable();
            $table->integer('userId');
            $table->string('userName')->nullable();
            $table->integer('foodId');
            $table->integer('typeId');
            $table->integer('restaurantId');
            $table->integer('quantity');
            $table->double('price')->nullable();
            $table->date('paymentDate')->nullable();
            $table->string('paymentType')->nullable();
            $table->integer('deliveryManId')->nullable(); 
            $table->boolean('isDeliverd')->default(0);
            $table->boolean('isCooked')->default(0);
            $table->string('time')->nullable();
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
        Schema::dropIfExists('deliveries');
    }
}
