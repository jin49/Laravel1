<?php

/* 以下のコマンドで生成したマイグレーションファイル
 * sail artisan make:seeder InitializeCoachesAndTeamsSeeder
 *
 * このファイルで設定した内容を実行するのは以下のコマンド
 * sail artisan db:seed --class=InitializeCoachesAndTeamsSeeder
 */

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* データベースへのレコード追加のために、DBファサードを利用する */
use Illuminate\Support\Facades\DB;

class InitializeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* coaches テーブルに、監督のデータを追加する */
        // DB::table('users')->insert(
        //     [
        //         ['name' => 'ユーザー１','email' => 'test1@test.com','password' => 'password'],
        //         ['name' => 'ユーザー２','email' => 'test2@test.com','password' => 'password'],
        //         ['name' => 'ユーザー３','email' => 'test3@test.com','password' => 'password'],
        //     ]
        // );

        /* teams テーブルに、チームのデータを追加する */
        // DB::table('artists')->insert(
        //     [
        //         ['name' => 'アーティスト１','email' => 'test1@test.com','password' => 'password'],
        //         ['name' => 'アーティスト２','email' => 'test2@test.com','password' => 'password'],
        //         ['name' => 'アーティスト３','email' => 'test3@test.com','password' => 'password'],
        //     ]
        // );
        DB::table('musics')->insert(
            [
                ['name' => '楽曲１','data' => 'test1.mp4','artist_id' => 1],
                ['name' => '楽曲２','data' => 'test2.mp4','artist_id' => 2],
                ['name' => '楽曲３','data' => 'test3.mp4','artist_id' => 3],
                ['name' => '楽曲４','data' => 'test1.mp4','artist_id' => 1],
                ['name' => '楽曲５','data' => 'test2.mp4','artist_id' => 2],
                ['name' => '楽曲６','data' => 'test3.mp4','artist_id' => 3],
                ['name' => '楽曲７','data' => 'test1.mp4','artist_id' => 1],
                ['name' => '楽曲８','data' => 'test2.mp4','artist_id' => 2],
                ['name' => '楽曲９','data' => 'test3.mp4','artist_id' => 3],
            ]
        );
        DB::table('playlists')->insert(
            [
                ['name' => 'プレイリスト１','music_id' => 1,'user_id' => 1],
                ['name' => 'プレイリスト１','music_id' => 3,'user_id' => 1],
                ['name' => 'プレイリスト１','music_id'=> 5,'user_id' => 1],
                ['name' => 'プレイリスト２','music_id' => 2,'user_id' => 2],
                ['name' => 'プレイリスト２','music_id' => 4,'user_id' => 2],
                ['name' => 'プレイリスト２','music_id'=> 6,'user_id' => 2],
            ]
        );
        DB::table('favorites')->insert(
            [
                ['user_id' => 1,'music_id' => 4],
                ['user_id' => 2,'music_id' => 9],
                ['user_id' => 3,'music_id' => 8],
                ['user_id' => 1,'music_id' => 1],
                ['user_id' => 2,'music_id' => 2],
                ['user_id' => 3,'music_id' => 3],
            ]
        );
        DB::table('album')->insert(
            [
                ['name' => 'アルバム１','music_id' => 1,'artist_id' => 1],
                ['name' => 'アルバム１','music_id' => 3,'artist_id' => 1],
                ['name' => 'アルバム１','music_id'=> 5,'artist_id' => 1],
                ['name' => 'アルバム２','music_id' => 2,'artist_id' => 2],
                ['name' => 'アルバム２','music_id' => 4,'artist_id' => 2],
                ['name' => 'アルバム２','music_id'=> 6,'artist_id' => 2],
            ]
        );
    }
}
