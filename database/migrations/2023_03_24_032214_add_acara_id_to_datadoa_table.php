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
        Schema::table('datadoa', function (Blueprint $table) {
            $table->foreignId('acara_id')->after('kat_doa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datadoa', function (Blueprint $table) {
            $table->dropColumn('acara_id');
        });
    }
};
