<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Activation des clés étrangères
        Schema::enableForeignKeyConstraints();

        //Création de la table JM_mer_vote_port
        //Cette table contiendra les votes des utilisateurs
        Schema::create('JM_mer_vote_port', function (Blueprint $table) {
            $table->id('vote_port_id'); //numéro id du vote
            $table->tinyInteger('vote_port_value'); //valeur du vote
            $table->foreignId('vote_port_user')->references('id')->on('users'); //le numéro id de l'utilisateur qui a envoyé le vote
            $table->foreignId('vote_port_location')->references('liste_port_lieu_id')->on('JM_mer_liste_port'); //le numéro id du port qui a reçu le vote
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('JM_mer_vote_port');
    }
}
