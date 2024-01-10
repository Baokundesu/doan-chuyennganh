<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->string('Tendangnhap')->primary();
            $table->string('Matkhau');
            $table->enum('Vaitro', ['giang_vien', 'sinh_vien', 'admin']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('thanhvien');
    }
};
