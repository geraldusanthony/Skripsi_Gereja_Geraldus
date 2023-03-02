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
        Schema::create('umat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_umat');
            $table->string('warga');
            $table->string('negara');
            $table->string('nik');
            $table->string('no_kk');
            $table->date('tgl_lahir');
            $table->string('jns_kelamin');
            $table->string('ling');
            $table->string('images');
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
        Schema::dropIfExists('umat');
    }
};
