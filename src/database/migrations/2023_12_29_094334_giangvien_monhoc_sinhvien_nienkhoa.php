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
        Schema::create('TongHop', function (Blueprint $table) {
            $table->id();
            $table->string('MaNK');
            $table->string('MSSV');
            //$table->string('MaGV');
            $table->string('MaMonHoc');
            $table->float('DiemTK');
            $table->foreign('MaNK')->references('MaNK')->on('NienKhoa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TongHop');
    }
};
