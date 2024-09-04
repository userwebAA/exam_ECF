<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heures', function (Blueprint $table) {
            $table->id();

            $table->string('jour')->nullable();
            $table->string('heure_ouverture')->nullable();
            $table->string('heure_fermeture')->nullable();
            $table->boolean('ouverture')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heures');
    }
};
