<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\SQueryException;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('micropost_id');
            $table->timestamps();
            // �O���L�[����
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('microsoft_id')->references('id')->on('users')->onDelete('cascade');
 
// user_id��follow_id�̑g�ݍ��킹�̏d���������Ȃ�
$table->unique(['user_id', 'microsoft_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_follow');
    }
}
