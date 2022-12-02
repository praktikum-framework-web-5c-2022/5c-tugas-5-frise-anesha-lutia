<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('no_ktm', 16)->unique();
            $table->enum('masa_berlaku', ['Berlaku','Habis']);
            $table->foreignId('mahasiswa_id')->unique()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartu_mahasiswas');
    }
};
