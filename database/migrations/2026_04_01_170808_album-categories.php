<?php

use App\Models\User;
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
        Schema::create('album_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletesDatetime();
            $table->string('category_name', 128)->index();
            $table->text('description')->nullable();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album_categories');
    }
};
