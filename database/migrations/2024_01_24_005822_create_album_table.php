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
        Schema::create('album', function (Blueprint $table) {
            $table->uuid('ID')->primary();
            $table->string('NamaAlbum');
            $table->text('Deskripsi');
            $table->date('TanggalDibuat');
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('ID')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
};
