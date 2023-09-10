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
        Schema::create('agreement_condition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agreement_id')->constrained();
            $table->foreignId('condition_id')->constrained();
            // Add any additional columns if needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agreement_condition');
    }
};
