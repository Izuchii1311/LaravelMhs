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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->enum('jurusan', ['Teknik Informatika', 'Sistem Informasi', 'Design Komunikasi Visual']);
            $table->enum('jeniskelamin', ['Laki - Laki', 'Perempuan']);
            $table->bigInteger('telp');
            $table->string('foto');
            $table->timestamps();
            // php artisan migrate
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
