<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokerja', function (Blueprint $table) {
            $table->id();
            // $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('alamat', 50);
            $table->string('posisi', 50);
            $table->string('deskripsi');
            $table->string('relation_code');
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
        Schema::dropIfExists('lokerja');
    }
}
