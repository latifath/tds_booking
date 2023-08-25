<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('numero_matricule')->unique();
            $table->string('marque');
            $table->string('modele');
            $table->string('vitesse');
            $table->string('Annee');
            $table->string('moteur');
            $table->string('Kilometrage');
            $table->string('couleur');
            $table->string('transmission');
            $table->string('carburant');
            $table->string('controle_technique');
            $table->integer('nbr_place');
            $table->string('availability')->default('disponible');
            $table->integer('media_id')->unsigned();
            $table->foreign('media_id')->references('id')->on('medias')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('type_voiture_id')->unsigned();
            $table->foreign('type_voiture_id')->references('id')->on('type_voitures')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('assurance_id')->unsigned();
            $table->foreign('assurance_id')->references('id')->on('assurances')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('visite_technique_id')->unsigned();
            $table->foreign('visite_technique_id')->references('id')->on('visite_techniques')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('voitures');
    }
};
