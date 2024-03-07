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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('barang_id')->index();//indexing untuk Foreig
            $table->unsignedBigInteger('user_id')->index();//indexing untuk Foreignk 
            $table->dateTime('stok_tanggal'); 
            $table->integer('stok_jumlah');
            $table->timestamps();

            //mendefinisikan foreign key pada kolom level id mengacu pada kolom lev
            $table->foreign('user_id')->references('user_id')->on('m_user');
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_stok', function (Blueprint $table) {
            //
        });
    }
};