<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoTabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_tabel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleseo')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('imgseo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo_tabel');
    }
}
