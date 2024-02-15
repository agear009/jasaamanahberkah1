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
        Schema::create('jasas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('condition');
            $table->string('price');
            $table->string('benefit');
            $table->string('process1');
            $table->string('process2');
            $table->string('process3');
            $table->string('process4');
            $table->string('process5');
            $table->string('process6');
            $table->string('process7');
            $table->string('process8');
            $table->string('process9');
            $table->string('process10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasas');
    }
};
