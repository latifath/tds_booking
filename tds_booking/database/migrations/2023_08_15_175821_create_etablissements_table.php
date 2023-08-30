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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('email');
            $table->string('commune');
            $table->string('ville');
            $table->string('departement');
            $table->string('adresse');
            $table->string('localisation');
            $table->integer('code_postal');
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
        Schema::dropIfExists('etablissements');
    }
};
