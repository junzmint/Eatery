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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('link'); // Path to the image
            $table->string('type'); // Type of media ('eatery' or 'food_drink')
            $table->unsignedBigInteger('eatery_id'); // Foreign key to eatery
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('eatery_id')->references('id')->on('eateries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
