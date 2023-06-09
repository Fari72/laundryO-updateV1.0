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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_outlet');
            $table->string('kode_invoice');
            $table->integer('id_member');
            $table->datetime('tgl');
            $table->datetime('batas_waktu');
            $table->datetime('tgl_bayar');
            $table->integer('biaya_tambahan');
            $table->integer('diskon');
            $table->enum('status',['baru','proses','selesai','diambil']);
            $table->enum('dibayar',['sudah-bayar','belum-bayar']);
            $table->integer('id_user');
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
        Schema::dropIfExists('transaksi');
    }
};
