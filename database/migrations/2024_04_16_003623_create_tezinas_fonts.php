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
        Schema::create('tezinas_fonts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('font_id');
            $table->foreign('font_id')->references('id')->on('fonts');

            $table->unsignedBigInteger('tezina_id');
            $table->foreign('tezina_id')->references('id')->on('tezinas');

            $table->index(['font_id', 'tezina_id'], 'tezinas_fonts_index');
            $table->unique(['font_id', 'tezina_id'], 'tezinas_fonts_composite_key');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tezinas_fonts');
    }
};
