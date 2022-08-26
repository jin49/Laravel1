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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();


            /* 関連付けをするための外部キーを設定 */
            $table->foreignId('user_id') // user_id というカラムを作成
            ->constrained('users');  // テーブル名を指定

            $table->foreignId('music_id') // music_id というカラムを作成
            ->constrained('musics');  // テーブル名を指定

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
        Schema::dropIfExists('favorites');
    }
};
