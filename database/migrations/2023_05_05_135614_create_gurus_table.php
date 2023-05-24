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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('username_guru');
            $table->string('password');
            $table->string('nama_guru');
            $table->bigInteger('nip');
            $table->string('tempat_lahir_guru');
            $table->string('tgl_lahir_guru');
            $table->string('jns_kelamin_guru');
            $table->string('pendidikan_terakhir_guru');
            $table->bigInteger('nohp_guru');
            $table->string('alamat_guru');
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
        Schema::dropIfExists('gurus');
    }
};
