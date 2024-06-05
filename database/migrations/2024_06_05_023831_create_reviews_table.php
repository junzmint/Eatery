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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eatery_id');
            $table->string('reviewer');
            $table->text('content');
            $table->unsignedInteger('rating');
            $table->string('image_link')->nullable();
            $table->unsignedInteger('like')->default(0);
            $table->unsignedInteger('dislike')->default(0);
            $table->timestamps();

            $table->foreign('eatery_id')->references('id')->on('eateries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
