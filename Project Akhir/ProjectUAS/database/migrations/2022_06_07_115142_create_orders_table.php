<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nama_cus');
            $table->char('no_meja', 5);
            $table->integer('total_order');
            $table->integer('total_pembayaran')->nullable();
            $table->date('tgl_order');
            $table->enum('status_order', ['Proses', 'Belum Bayar', 'Selesai']);
            $table->timestamps();
            $table->foreign('no_meja')->references('no_meja')->on('mejas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
