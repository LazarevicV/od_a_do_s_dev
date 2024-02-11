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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('naslov', 128)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->text('sadrzaj')->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->string('kategorija', 32)->charset('utf8mb4')->collate('utf8mb4_unicode_ci');
            $table->string('slika')->nullable();
            $table->boolean('objavljen')->default(0);
            $table->boolean('istaknut')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
