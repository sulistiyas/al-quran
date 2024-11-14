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
        Schema::create('tbl_ayat', function (Blueprint $table) {
            $table->id();
            // $table->integer('surah');
            $table->foreignId('surah')->nullable()->index('fk_tbl_ayat_to_tbl_master_surah');
            $table->integer('nomor');
            $table->text('ar');
            $table->text('tr');
            $table->text('idn');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ayat');
    }
};
