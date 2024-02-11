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
        Schema::create('video_tutorijals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naziv', 64)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->text('opis')->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->text('embed_video');
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
        Schema::dropIfExists('video_tutorijals');
    }
};
