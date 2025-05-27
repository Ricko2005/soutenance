<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('artistes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('specialite');
            $table->text('biographie');
            $table->string('photo'); // Chemin vers l'image
            $table->string('telephone')->nullable();
            $table->string('localisation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artistes');
    }
};