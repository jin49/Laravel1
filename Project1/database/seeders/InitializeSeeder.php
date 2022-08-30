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
        // DB::table('musics')->insert(
        //     [
        //         ['id' => 1, 'name' => '楽曲１','data' => 'test1.mp4','artist_id' => 1],
        //         ['id' => 2,'name' => '楽曲２','data' => 'test2.mp4','artist_id' => 2],
        //         ['id' => 3,'name' => '楽曲３','data' => 'test3.mp4','artist_id' => 3],
        //         ['id' => 4,'name' => '楽曲４','data' => 'test1.mp4','artist_id' => 1],
        //         ['id' => 5,'name' => '楽曲５','data' => 'test2.mp4','artist_id' => 2],
        //         ['id' => 6,'name' => '楽曲６','data' => 'test3.mp4','artist_id' => 3],
        //         ['id' => 7,'name' => '楽曲７','data' => 'test1.mp4','artist_id' => 1],
        //         ['id' => 8,'name' => '楽曲８','data' => 'test2.mp4','artist_id' => 2],
        //         ['id' => 9,'name' => '楽曲９','data' => 'test3.mp4','artist_id' => 3],

        //     ]
        // );
        // DB::table('playlists')->insert(
        //     [
        //         ['id' => 1,'name' => 'プレイリスト１','user_id' => 1],
        //         ['id' => 2,'name' => 'プレイリスト１','user_id' => 2],
        //         ['id' => 3,'name' => 'プレイリスト１','user_id' => 3],
        //         // ['id' => 4,'name' => 'プレイリスト２','user_id' => 4],
        //         ['id' => 5,'name' => 'プレイリスト２','user_id' => 1],
        //         ['id' => 6,'name' => 'プレイリスト２','user_id' => 2],
        //         ['id' => 7,'name' => 'プレイリスト２','user_id' => 3],
        //         // ['id' => 8,'name' => 'プレイリスト２','user_id' => 4],
        //         ['id' => 9,'name' => 'プレイリスト２','user_id' => 5],
        //     ]
        // );
        // DB::table('musiclists')->insert(
        //     [
        //         ['id' => 1,'playlist_id' => 9,'music_id' => 1],
        //         ['id' => 2,'playlist_id' => 9,'music_id' => 2],
        //         ['id' => 3,'playlist_id' => 9,'music_id' => 3],
        //         // ['id' => 4,'playlist_id' => 9,'music_id' => 4],
        //     ]
        //     );
        // DB::table('favorites')->insert(
        //     [
        //         ['user_id' => 1,'music_id' => 4],
        //         ['user_id' => 2,'music_id' => 9],
        //         ['user_id' => 3,'music_id' => 8],
        //         ['user_id' => 1,'music_id' => 1],
        //         ['user_id' => 2,'music_id' => 2],
        //         ['user_id' => 3,'music_id' => 3],

        //         ['user_id' => 5,'music_id' => 2],
        //         ['user_id' => 5,'music_id' => 3],
        //     ]
        // );
        // DB::table('album')->insert(
        //     [
        //         ['id' => 1,'name' => 'アルバム１','artist_id' => 1],
        //         ['id' => 2,'name' => 'アルバム２','artist_id' => 1],
        //     ]
        // );
        DB::table('albumlists')->insert(
            [
                ['id' => 1,'music_id' => 1,'album_id' => 1],
                ['id' => 2,'music_id' => 2,'album_id' => 1],
                ['id' => 3,'music_id' => 3,'album_id' => 1],
                ['id' => 4,'music_id' => 6,'album_id' => 2],
                ['id' => 5,'music_id' => 8,'album_id' => 2],

            ]
            );
    }
}
