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
        Schema::create('acute_pains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->references('id')->on('pasiens');
            $table->string('outcome_criteria')->nullable();
            $table->string('action_plan')->nullable();
            $table->string('reduce_pain')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acute_pains');
    }
};
