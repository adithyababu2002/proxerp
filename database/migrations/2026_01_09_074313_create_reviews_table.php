<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->string('name');              // Person Name
            $table->string('profession')->nullable();
            $table->text('message');             // Review content
            $table->unsignedTinyInteger('rating')->default(5); // 1–5 stars
            $table->string('image')->nullable(); // Profile image
            $table->boolean('status')->default(true); // Show / Hide

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
