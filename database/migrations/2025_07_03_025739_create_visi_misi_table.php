<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('visi_misi', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable(); // <- kolom untuk menyimpan path gambar
            $table->text('visi');
            $table->text('misi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visi_misi');
    }
};