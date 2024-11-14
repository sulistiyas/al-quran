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
        Schema::table('tbl_ayat', function (Blueprint $table) {
            $table->foreign('surah', 'fk_tbl_ayat_to_tbl_master_surah')->references('nomor')->on('tbl_master_surah')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_ayat', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_ayat_to_tbl_master_surah');
        });
    }
};
