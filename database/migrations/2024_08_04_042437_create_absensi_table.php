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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usersGuru_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('tanggal');
            $table->time('waktu_datang');
            $table->time('waktu_pulang')->nullable();
            $table->enum('status', ['Hadir', 'Sakit', 'Izin', 'Mangkir']);
            $table->integer('poin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
