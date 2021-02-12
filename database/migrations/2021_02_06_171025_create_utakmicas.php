<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtakmicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utakmicas', function (Blueprint $table) {
            $table->id();
            $table->string('domacin');
            $table->string('domacin_url');
            $table->string('gost');
            $table->string('gost_url');
            $table->decimal('domacin_golovi');
            $table->decimal('gost_golovi');
            $table->string('opis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utakmicas');
    }
}
