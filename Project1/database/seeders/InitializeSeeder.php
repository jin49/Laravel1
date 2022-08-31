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
        $index = 1;
        $max_artist = 3;
        $max_album = 6;
        $max_music = 10;
        // for ($j = 1; $j < 4; $j++) {
        //     $data = file_get_contents('https://placeimg.com/640/480/people');

        //     $filename = chr(mt_rand(97, 122));
        //     for ($i = 0; $i < 5; $i++) {
        //         $filename .= chr(mt_rand(97, 122));
        //     }
        //     file_put_contents('storage/app/public/image/' . $filename . ".jfif", $data);
        //     DB::table('artists')->insert(
        //         [
        //             ['id' => $j,'name' => "アーティスト($filename)", 'image' => "/image/$filename.jfif"]
        //         ]
        //     );
        //     $max++;
        // }
        // $index = 1;
        // for ($j = 1; $j < 11; $j++) {
        //     $data = file_get_contents('https://placeimg.com/640/480/animals');

        //     $filename = chr(mt_rand(97, 122));
        //     for ($i = 0; $i < 10; $i++) {
        //         $filename .= chr(mt_rand(97, 122));
        //     }
        //     file_put_contents('storage/app/public/image/' . $filename . ".jfif", $data);
        //     DB::table('musics')->insert(
        //         [
        //             ['id' => $j,'image' => '/image/' . $filename . ".jfif", 'name' => '楽曲(' . $filename . ")", 'data' => 'test1.mp4', 'artist_id' =>$index],
        //         ]
        //     );
        //     if($index == $max_artist){
        //         $index = 1;
        //     }else{
        //         $index++;
        //     }
        // }

        // $index = 1;
        // for ($j = 1; $j < $max_album + 1; $j++) {
        //     $data = file_get_contents('https://placeimg.com/640/480/nature');
        //     $filename = chr(mt_rand(97, 122));
        //     for ($i = 0; $i < 5; $i++) {
        //         $filename .= chr(mt_rand(97, 122));
        //     }
            // file_put_contents('storage/app/public/image/' . $filename . ".jfif", $data);
        //     DB::table('album')->insert(
        //         [
        //             ['id' => $j, 'image' => '/image/' . $filename . ".jfif", 'name' => "アルバム($filename)", 'artist_id' => $index],
        //         ]
        //     );

        //     if ($index == $max_artist) {
        //         $index = 1;
        //     } else {
        //         $index++;
        //     }
        // }

        DB::table('albumlists')->insert(
            [
                ['music_id' => 1,'album_id' => 1],
                ['music_id' => 2,'album_id' => 2],
                ['music_id' => 3,'album_id' => 3],
                ['music_id' => 4,'album_id' => 4],
                ['music_id' => 5,'album_id' => 5],
                ['music_id' => 6,'album_id' => 6],
                ['music_id' => 7,'album_id' => 1],
                ['music_id' => 8,'album_id' => 2],
                ['music_id' => 9,'album_id' => 3],
                ['music_id' => 10,'album_id' => 4],

            ]
            );
    }
}
