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
        Schema::create('lost_pets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->string('sex');
            $table->string('lost');
            $table->string('physical_description');
            $table->longText('message');
            $table->string('last_seen_date');
            $table->string('last_known_location');
            $table->string('cross_street');
            $table->integer('age');
            $table->interger('microchip_no');
            $table->interger('tattoo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lost_pets');
    }
};
