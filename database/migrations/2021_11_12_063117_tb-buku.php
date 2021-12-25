<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('name_buku');
            $table->string('penulis');
            $table->integer('tahun');
            $table->string('penerbit');
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
        Schema::drop('buku');
    }
}
