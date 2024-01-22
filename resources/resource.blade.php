protected $fillable=['restaurantid','foodid','name'];
Schema::create('types', function (Blueprint $table) {
    $table->id();
    $table->integer('foodid');
    $table->integer('restaurantid');
    $table->string('image')->nullable();
    $table->string('description')->nullable();
    $table->string('name');

    $table->timestamps();
    
});


//stages


protected $fillable=['foodid','restaurantid','typeid','ingrident1','ingrident2','ingrident3','ingrident4'];
Schema::create('stages', function (Blueprint $table) {
    $table->id();
    $table->integer('foodid');
    $table->integer('restaurantid');
    $table->integer('typeid');
    $table->string('description')->nullable();
    $table->string('image1')->nullable();
    $table->string('image2')->nullable();
    $table->string('image3')->nullable();
    $table->string('image4')->nullable();
    $table->string('ingrident1');
    $table->string('ingrident2');
    $table->string('ingrident3');
    $table->string('ingrident4');
    $table->timestamps();
});