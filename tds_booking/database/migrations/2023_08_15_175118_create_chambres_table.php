<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('slug')->unique();
            $table->text('description');
            $table->float('night');
            $table->integer('Nombre_lit');
            $table->integer('numero');
            $table->integer('superficie');
            $table->string('availability')->default('disponible');
            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('medias')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('type_chambre_id')->unsigned();
            $table->foreign('type_chambre_id')->references('id')->on('type_chambres')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('chambres');
    }
};
