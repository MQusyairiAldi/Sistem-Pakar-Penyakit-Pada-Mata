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
Schema::create('detailbasisaturans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('basisaturan_id');
            $table->timestamps();
            $table->softDeletes(); // Tambahkan kolom deleted_at
 
            $table->foreign('gejala_id')->references('id')->on('gejalas');
            $table->foreign('basisaturan_id')->references('id')->on('basisaturans');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailbasisaturans');
    }

    
};