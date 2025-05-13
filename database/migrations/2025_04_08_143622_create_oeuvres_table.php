<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOeuvresTable extends Migration
{
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); // Colonne pour le titre de l'œuvre
            $table->string('auteur'); // Colonne pour l'auteur
            $table->decimal('prix', 15, 2); // Colonne pour le prix (avec une précision de 2 décimales)
            $table->string('image')->nullable(); // Colonne pour l'image (URL de l'image), nullable si aucune image n'est présente
            $table->text('description')->nullable(); // Colonne pour la description de l'œuvre
            $table->timestamps(); // Gestion automatique des timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
}
