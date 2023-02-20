<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            // nomor referensi
            // kategori - select berdasarkan data katagori
            // UOM - select
            // image - file
            // jumlah stock - number
            // nama barang - string
            // brand - select berdasarkan data brand
            // harga - number
            // status - 

            $table->increments('id');
            
            $table->integer('nomor-referensi');
            $table->string('katagori'); // belong to tabel katagori
            $table->string('uom');
            $table->string('image');
            $table->string('stok');
            $table->string('nama');
            $table->string('brand'); // belong to tabel brand
            $table->integer('harga');
            $table->string('status');
            
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
        Schema::dropIfExists('barangs');
    }
}
