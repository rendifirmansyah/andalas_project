<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('teks1');
            $table->string('teks2');
            $table->text('gambar_isi')->nullable();
            $table->text('gambar_home')->nullable();
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
        Schema::dropIfExists('gambar_homes');
    }
}
