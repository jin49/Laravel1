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
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('data');
            $table->timestamp('email_verified_at')->nullable();
            /* artists テーブルとの関連付けをするための外部キーを設定する */
            $table->foreignId('artist_id') // coach_id というカラムを作成する
                ->nullable() // 外部キーにnull を設定できるようにする
                ->default(null) // 外部キーのデフォルト値をnullに設定する
                ->constrained('artists');  // 関連づけるテーブル名を指定する(※先にartist テーブルを作成しておく必要がある)
            $table->rememberToken();
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
        Schema::dropIfExists('musics');
    }
};
