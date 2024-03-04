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
        Schema::create('kontakts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email', 64);
            $table->boolean('procitano')->default(false);
            $table->text('sadrzaj');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontakts');
    }
};
