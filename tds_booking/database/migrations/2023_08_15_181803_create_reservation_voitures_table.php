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
        Schema::create('reservation_voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_depart');
            $table->date('date_retour');
            $table->date('duration');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('numero');
            $table->decimal('montant', 10, 2);
            $table->string('chauffeur');
            $table->string('kilometrage');
            $table->string('status')->default('en attente');
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
        Schema::dropIfExists('reservation_voitures');
    }
};
