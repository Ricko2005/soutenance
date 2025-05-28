<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('image');
            $table->text('description');
            $table->string('auteur'); // Champ texte simple
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('oeuvres');
    }
};