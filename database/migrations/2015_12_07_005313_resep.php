<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('koki', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nama');
            $table->string('kode');
            $table->timestamps();
        });
        Schema::create('resep', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('nama');
            $table->string('kode');
            $table->integer('koki_id');
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
        //
        Schema::drop('koki');
        Schema::drop('resep');
    }
}
