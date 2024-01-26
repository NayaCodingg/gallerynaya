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
        Schema::create('likefoto', function (Blueprint $table) {
            $table->uuid('ID')->primary();
            $table->foreignUuid('FotoID');
            $table->foreign('FotoID')->references('ID')->on('foto');
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('ID')->on('user');
            $table->date('TanggalLike');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likefoto');
    }
};
