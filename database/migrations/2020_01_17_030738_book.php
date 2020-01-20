<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbbook', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('synopsis');
            $table->string('tanggal_rilis');
            $table->string('halaman');
            $table->string('cover');
            $table->string('image')->nullable();
            $table->string('user_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tbbook');
    }
}