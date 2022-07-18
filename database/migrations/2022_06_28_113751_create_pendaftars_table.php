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
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('email');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('asal_sekolah');
            $table->string('alamat');
            $table->string('foto_diri');
            $table->string('ijazah');
            $table->string('akta');
            $table->string('kartu_kk');
            $table->string('sertifikat_pres');
            $table->timestamp('published_at');
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
        Schema::dropIfExists('pendaftars');
    }
};
