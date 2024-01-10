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
        Schema::create('GiangVien', function (Blueprint $table) {
            $table->string('MaGV')->primary();
            $table->string('HoGV');
            $table->string('TenGV');
            $table->string('GioiTinh');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('DienThoai');
            $table->string('Email');
            $table->string('SoQuyetDinhCV');
            $table->date('ThoiGianCV');
            $table->string('MaLop');
            $table->string('TenDangNhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('GiangVien');
    }
};
