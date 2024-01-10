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
        Schema::create('Lop', function (Blueprint $table) {
            $table->string('MaLop')->primary();
            $table->string('TenLop');
            $table->string('MaDaoTao');
            $table->string('MaNK');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Lop');
    }
};
