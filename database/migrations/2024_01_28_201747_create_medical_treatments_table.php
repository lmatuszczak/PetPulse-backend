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
        Schema::create('medical_treatments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('visit_id');
            $table->timestamps();

            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('visit_id')->references('id')->on('visits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_treatments');
    }
};
