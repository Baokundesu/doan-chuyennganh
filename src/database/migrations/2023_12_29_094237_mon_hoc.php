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
        Schema::create('MonHoc', function (Blueprint $table) {
            $table->string('MaMonHoc')->primary();
            $table->string('TenMonHoc');
            $table->string('HocKyTrenCT');
            $table->string('MaLinhVuc');
            $table->string('MaDaoTao');
            $table->string('TCLyThuyet');
            $table->string('TCThucHanh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MonHoc');
    }
};
