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
        Schema::create('kategorija_blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv', 64)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorija_blogs');
    }
};
