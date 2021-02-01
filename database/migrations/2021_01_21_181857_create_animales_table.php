<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string("especie",100);
            $table->string("slug")->unique();
            $table->float("peso",6,1);
            $table->float("altura",6,1);
            $table->date("fechaNac");
            $table->string("imagen",100)->nullable();
            $table->string("alimentacion",20)->nullable();
            $table->longText("descripcion")->nullable();
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
        Schema::dropIfExists('animales');
    }
}
