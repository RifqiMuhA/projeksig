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
        Schema::create('himadas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kepanjangan');
            $table->string('daerah');
            $table->string('instagram');
            $table->foreignId('island_id')->constrained()->onDelete('cascade'); // Relasi ke tabel Island
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('himadas');
    }
};
