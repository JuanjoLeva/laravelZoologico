<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalCuidadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_cuidador', function (Blueprint $table) {
            $table->unsignedBigInteger("animal_id");
            $table->foreign("animal_id")->references("id")->on("animales");

            $table->unsignedBigInteger("cuidador_id");
            $table->foreign("cuidador_id")->references("id")->on("cuidadores");

            $table->primary(array("cuidador_id","animal_id"));
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
        Schema::dropIfExists('animal_cuidador');
    }
}
