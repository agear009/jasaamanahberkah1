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
        Schema::create('trackers', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('name_order');
            $table->string('condition');
            $table->string('status1');
            $table->string('status2');
            $table->string('status3');
            $table->string('status4');
            $table->string('status5');
            $table->string('status6');
            $table->string('status7');
            $table->string('status8');
            $table->string('status9');
            $table->string('status10');
            $table->string('constraint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackers');
    }
};
