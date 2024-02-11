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
        Schema::create('fonts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv', 32)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->text('opis')->nullable()->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->string('link_detaljno')->nullable();
            $table->boolean('objavljen')->default(0);

            $table->unsignedBigInteger('resurs_id');
            $table->foreign('resurs_id')->references('id')->on('resurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fonts');
    }
};
