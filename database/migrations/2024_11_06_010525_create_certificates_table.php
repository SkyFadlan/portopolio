<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Nama Sertifikat
            $table->string('issued_by');      // Dikeluarkan oleh
            $table->date('issued_at');       // Tanggal dikeluarkan
            $table->text('description');     // Deskripsi Sertifikat
            $table->string('file')->nullable(); // File sertifikat (misalnya, PDF)
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
    
};