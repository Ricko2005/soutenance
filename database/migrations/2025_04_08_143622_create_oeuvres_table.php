<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('image'); // Chemin vers l'image
            $table->text('description');
    $table->string('auteur'); // Champ simple plutôt que clé étrangère
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
};