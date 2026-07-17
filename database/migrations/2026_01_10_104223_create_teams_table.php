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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
             $table->string('name');              // Person Name
            $table->string('profession')->nullable();
            $table->string('description');             // Review content
            $table->string('image1')->nullable(); // Profile 
            $table->string('image2')->nullable(); // Profile image
            $table->string('link')->nullable(); // Profile image

            $table->boolean('status')->default(true); // Show / Hide
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
