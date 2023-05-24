<?php

use App\Models\Catat_pembayaran;
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
        Schema::create('catat_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nisn');
            $table->string('kelas');
            $table->string('nama_siswa');
            $table->string('jenis_pembayaran');
            $table->string('jumlah_pembayaran');
            $table->string('tgl_pembayaran');
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
        Schema::dropIfExists('catat_pembayarans');
    }
};
