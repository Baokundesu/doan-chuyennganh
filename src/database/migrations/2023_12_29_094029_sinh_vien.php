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
        Schema::create('SinhVien', function (Blueprint $table) {
            $table->string('MSSV')->primary();
            $table->string('HoSV');
            $table->string('TenSV');
            $table->string('MaLop');
            $table->string('GioiTinh');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('DienThoai');
            $table->string('Email');
            $table->string('TinhTrang');
            $table->string('TenDangNhap');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SinhVien');
    }
};
