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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('email');
            $table->string('commune');
            $table->string('ville');
            $table->string('departement')->nullable();
            $table->string('adresse');
            $table->string('localisation')->nullable();
            $table->string('code_postal')->nullable();
            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('medias')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('hotels');
    }
};
