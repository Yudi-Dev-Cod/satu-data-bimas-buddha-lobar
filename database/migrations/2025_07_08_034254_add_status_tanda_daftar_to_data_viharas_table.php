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
        Schema::table('data_viharas', function (Blueprint $table) {
            $table->enum('status_tanda_daftar', ['Terdaftar', 'Belum Terdaftar', 'Perpanjangan'])->default('Belum Terdaftar')->after('kontak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_viharas', function (Blueprint $table) {
            $table->dropColumn('status_tanda_daftar');
        });
    }
};