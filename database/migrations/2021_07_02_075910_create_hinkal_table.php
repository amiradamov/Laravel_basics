<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinkalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinkal', function (  $table) {
            $table->id();
            $table->timestamps();
            $table->string('type'); 
            $table->string('base');
            $table->string('name');
            $table->json('toppings');
            $table->string('hide');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinkal');
    }
}
