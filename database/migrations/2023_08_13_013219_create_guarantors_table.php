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
        Schema::create('guarantors', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name')->nullable();
            $table->string('email')->unique();
            $table->string('cnic');

            $table->string('country');
            $table->string('city');
            $table->string('address')->nullable();

            $table->string('contact1');
            $table->string('contact2')->nullable();

            $table->string('image')->nullable();
            
            $table->bigInteger('entry_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guarantors');
    }
};
