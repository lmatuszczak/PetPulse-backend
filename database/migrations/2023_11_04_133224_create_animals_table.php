<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('microchip_number')->unique();
            $table->float('weight');
            $table->integer('age');
            $table->string('color');
            $table->string('gender');
            $table->unsignedBigInteger('animal_type_id');
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('owner_id');
            $table->timestamps();

            $table->foreign('animal_type_id')->references('id')->on('animal_types');
            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
