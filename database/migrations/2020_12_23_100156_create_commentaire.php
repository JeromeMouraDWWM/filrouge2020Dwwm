<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaire extends Migration
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

        //Création de la table JM_mer_commentaire_port
        //Cette table contiendra tous les commentaires
        Schema::create('JM_mer_commentaire_port', function (Blueprint $table) {
            $table->id('commentaire_port_commentaire_id'); //numéro id du commentaire
            $table->foreignId('commentaire_port_lieu_id')->references('liste_port_lieu_id')->on('JM_mer_liste_port'); //id du port qui a reçu le commentaire//
            $table->string('commentaire_port_commentaire', 500)->unique(); //le commentaire
            $table->string('commentaire_port_fichier', 255)->nullable(); //la destination du fichier envoyé avec le commentaire
            $table->foreignId('commentaire_port_user_id')->references('id')->on('users'); //id de l'user qui a écrit le commentaire
            $table->foreignId('commentaire_port_reponse_id')->nullable()->references('commentaire_port_commentaire_id')->on('JM_mer_commentaire_port'); //id du commentaire répondu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('JM_mer_commentaire_port');
    }
}
