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
        Schema::create('list_jokis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_joki', 50)->unique();
            $table->string('jenis_joki', 100);
            $table->decimal('harga', 12, 2);
            $table->integer('stok')->default(0);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_jokis');
    }
};
