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
        Schema::create('komentarfoto', function (Blueprint $table) {
            $table->uuid('ID')->primary();
            $table->string('FotoID');
            $table->foreignUuid('UserID');
            $table->foreign('UserID')->references('ID')->on('user');
            $table->text('IsiKomentar');
            $table->date('TanggalKomentar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentarfoto');
    }
};
