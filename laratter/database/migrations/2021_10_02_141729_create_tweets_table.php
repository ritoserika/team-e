<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
        $table->id();
        // «‚±‚±‚©‚ç’Ç‰Á
        $table->string('tweet');
        $table->int('favorite');
        $table->text('description')->nullable();
      // ª‚±‚±‚Ü‚Å’Ç‰Á
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
        Schema::dropIfExists('tweets');
    }
}
