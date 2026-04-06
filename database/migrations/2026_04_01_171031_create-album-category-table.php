<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('album_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('album_id')->constrained()->cascadeOnDelete();
            $table->foreignId('album_category_id')->constrained()->cascadeOnDelete();
            $table->unique(['album_id', 'album_category_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_category');
    }
};
