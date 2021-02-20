<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaskisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaskis', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('nama_transaksi');
            $table->dateTime('tgl_transaksi');
            $table->string('harga');
            $table->integer('qty');
            $table->integer('id_baranag');
            $table->integer('diskon');
            $table->integer('id_pelanggan');
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
        Schema::dropIfExists('transaskis');
    }
}
