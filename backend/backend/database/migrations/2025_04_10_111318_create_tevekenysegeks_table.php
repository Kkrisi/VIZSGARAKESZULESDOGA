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
        Schema::create('tevekenysegeks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kat_id');
            $table->string('tev_nev');
            $table->enum('allapot',['kész','nincs kész']);
            $table->timestamps();

            $table->foreign('kat_id')->references('id')->on('kategoriaks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegeks');
    }
};
