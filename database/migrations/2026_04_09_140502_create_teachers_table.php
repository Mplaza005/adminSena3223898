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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('area_id')->constrained()->onDelete('cascade');
           // $table->foreignId('training_center_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            //Atributos foraneos
            $table->unsignedBigInteger('training_centers_id')->nullable();

           //referenciando la tabla users
            $table->foreign('training_centers_id')
            ->references('id')
            ->on('training_centers')->onDelete('set null');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
