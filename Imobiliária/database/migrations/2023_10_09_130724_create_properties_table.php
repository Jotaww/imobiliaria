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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('propertyType');
            $table->string('mainPhoto');
            $table->json('photos');
            $table->string('price');
            $table->string('condominium');
            $table->string('iptu');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('number');
            $table->string('state');
            $table->integer('squareMeters');
            $table->integer('bedrooms');
            $table->integer('bathroom');
            $table->integer('carSpaces');
            $table->text('description');
            $table->string('sold');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
