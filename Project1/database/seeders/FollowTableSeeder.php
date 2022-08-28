<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* データベースへのレコード追加のために、DBファサードを利用する */
use Illuminate\Support\Facades\DB;
class FollowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('follow_albums')->insert(
            [
                ['user_id' => 1,'album_id' => 1],
                ['user_id' => 2,'album_id' => 1],
                ['user_id' => 2,'album_id' => 2],
                ['user_id' => 3,'album_id' => 1],
                ['user_id' => 3,'album_id' => 3],
            ]
        );
        DB::table('follow_artists')->insert(
            [
                ['user_id' => 1,'artist_id' => 3],
                ['user_id' => 2,'artist_id' => 2],
                ['user_id' => 3,'artist_id' => 1],
            ]
        );
    }
}
