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
        Schema::create('resurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv', 128)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->text('opis')->nullable()->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->boolean('objavljen')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resurs');
    }
};
