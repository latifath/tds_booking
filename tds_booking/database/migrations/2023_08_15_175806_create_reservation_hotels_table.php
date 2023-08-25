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
        Schema::create('reservation_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_arriv');
            $table->date('date_depart');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('numero');
            $table->decimal('montant', 10, 2);
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
        Schema::dropIfExists('reservation_hotels');
    }
};
