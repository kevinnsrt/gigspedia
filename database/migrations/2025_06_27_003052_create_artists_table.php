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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('region',['lokal','internasional']);
            $table->unsignedBigInteger('id_genre');
            $table->foreign('id_genre')->references('id')->on('genres')->onDelete('cascade');
            $table->string('deskripsi');
            $table->string('url_gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
