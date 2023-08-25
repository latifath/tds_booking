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
        Schema::create('visite_techniques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_visite_techniques');
            $table->string('nature');
            $table->string('nom_agence');
            $table->date('date_fin_valide');
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
        Schema::dropIfExists('visite_techniques');
    }
};
