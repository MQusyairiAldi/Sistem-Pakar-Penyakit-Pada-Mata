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
        Schema::create('detailpenyakits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('konsultasi_id');
            $table->unsignedBigInteger('penyakit_id');
            $table->tinyInteger('presentase');
            $table->timestamps();
            $table->softDeletes(); // Tambahkan kolom deleted_at

            // Define foreign key constraints if needed
            $table->foreign('konsultasi_id')->references('id')->on('konsultasis');
            $table->foreign('penyakit_id')->references('id')->on('penyakits');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenyakits');
    }
};