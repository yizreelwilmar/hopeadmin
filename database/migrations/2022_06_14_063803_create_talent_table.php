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
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('sosmed');   
            $table->string('no_tlp');
            $table->string('email');   
            $table->string('ktp');
            $table->string('npwp');   
            $table->string('shoot');
            $table->string('tanggalshoot');
            $table->string('tanggalshootterakhir'); 
            $table->string('ket');
            $table->string('foto');
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
        Schema::dropIfExists('talent');
    }
};
