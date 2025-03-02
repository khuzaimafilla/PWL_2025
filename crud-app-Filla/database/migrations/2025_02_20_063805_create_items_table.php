<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //untuk menjalankan perubahan pada migrasi
    {
        Schema::create('items', function (Blueprint $table) { //untuk mendefinisikan kolom-kolom pada tabel
            $table->id(); //mendefinisikan primary key pada tabel
            $table->string('name'); //mendefinisikan kolom 'name' bertipe 'String'
            $table->text('description'); //mendefinisikan kolom 'description' bertipe 'text' untuk inputan text yang panjang
            $table->timestamps(); //membuat kolom otomatis untuk menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
