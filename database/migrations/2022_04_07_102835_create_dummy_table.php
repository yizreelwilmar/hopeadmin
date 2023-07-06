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
        Schema::create('datadoa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_tlp');
            $table->string('email');
            $table->string('alamat');   
            $table->string('provinsi');
            $table->string('agama');   
            $table->string('kat_doa');
            $table->string('note');   
            $table->string('bible_study');
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
        Schema::dropIfExists('datadoa');
    }
};
