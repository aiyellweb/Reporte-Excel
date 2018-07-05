<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_animal');
            $table->string('descripcion_animal');
            $table->integer('tipo_animal_id')->unsigned();
           // relaciones 
            $table->foreign('tipo_animal_id')->references('id')->on('tipo_animal');
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
        Schema::dropIfExists('animal');
    }
}
