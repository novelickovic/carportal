<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('make');
            $table->string('model');
            $table->integer('year')->unsigned();
            $table->string('body_type');
            $table->integer('mileage')->unsigned();
            $table->string('fuel');
            $table->integer('engine');
            $table->string('transmission');
            $table->integer('horse_power')->unsigned();
            $table->string('doors');
            $table->string('seats');
            $table->integer('price')->unsigned();
            $table->string('interior_color');
            $table->string('exterior_color');

            $table->text('specification')->nullable();
            $table->integer('active')->unsigned()->default(1);
            $table->string('description');

            $table->string('slug')->nullable();
            $table->integer('view_count')->default(0);

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
        Schema::dropIfExists('cars');
    }
}
