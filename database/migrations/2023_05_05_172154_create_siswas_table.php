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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('username_siswa');
            $table->string('password');
            $table->bigInteger('nisn');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('kelas');
            $table->string('walikelas');
            $table->string('jns_kelamin');
            $table->bigInteger('nohp_siswa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->bigInteger('nohp_ortu');
            $table->string('alamat');
            $table->string('nama_wali');
            $table->bigInteger('nohp_wali');
            $table->string('alamat_wali');
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
        Schema::dropIfExists('siswas');
    }
};
