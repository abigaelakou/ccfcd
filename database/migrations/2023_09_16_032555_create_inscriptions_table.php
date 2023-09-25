<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->date('date_naiss');
            $table->string('lieu_naiss');
            $table->enum('genre', ['Feminin', 'Masculin']);
            $table->string('classe_precedent');
            $table->string('classe_a_suivre');
            $table->string('nom_pere');
            $table->string('contact_pere');
            $table->string('nom_mere');
            $table->string('contact_mere');
            $table->string('tuteur_legal');
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
        Schema::dropIfExists('inscriptions');
    }
}
