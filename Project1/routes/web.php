<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\ArtistFormController;
use App\Http\Controllers\MusicFormController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ホーム画面
Route::get('/', [UserFormController::class, 'index']);

// アーティストの詳細画面
Route::get('/Artist', [ArtistFormController::class, 'index']);

Route::get('/Music/detail/{id}',[MusicFormController::class, 'detail']);
// 楽曲の新規作成画面
Route::get('/Music/create',[MusicFormController::class, 'musicCreate'])->middleware(['auth']);
//新規作成の実行
Route::post('/Music/create',[MusicFormController::class, 'musicCreateExec'])->middleware(['auth']);

// 楽曲のプレイリストへの追加画面
Route::get('/Music/add/{id}', [MusicFormController::class, 'musicAdd'])->middleware(['auth']);
Route::post('/Music/add/{id}/exec', [MusicFormController::class, 'musicAddExec'])->middleware(['auth']);


// 楽曲の編集画面
Route::get('/Music/edit/{id}', [MusicFormController::class, 'musicEdit'])->middleware(['auth']);
Route::post('/Music/edit/{id}/exec', [MusicFormController::class, 'musicEditExec'])->middleware(['auth']);

// プレイリストから楽曲を削除する画面
Route::get('/Music/delete/{id}', [MusicFormController::class, 'musicDelete'])->middleware(['auth']);
Route::post('/Music/delete/{id}/exec', [MusicFormController::class, 'musicDeleteExec'])->middleware(['auth']);

// 選択したプレイリストの内訳
Route::get('/Playlist/{id}',[MusicFormController::class,'playlist'])->middleware(['auth']);

// プレイリストの削除の確認
Route::get('/Playlist/delete/{id}',[MusicFormController::class, 'playlistDelete'])->middleware(['auth']);
//削除の実行
Route::post('/Playlist/delete/{id}',[MusicFormController::class, 'playlistDeleteExec'])->middleware(['auth']);

// プレイリスト自体の追加
Route::get('/PlaylistAdd',[MusicFormController::class, 'playlistAdd'])->middleware(['auth']);
// 実行
Route::post('/PlaylistAdd',[MusicFormController::class, 'playlistAddExec'])->middleware(['auth']);
// 検索画面
Route::get('/Search',[MusicFormController::class,'search']);

// アーティストの画面
Route::get('/Artist/{id}',[ArtistFormController::class,'artist']);

// アルバムの画面
Route::get('/Album/{id}',[ArtistFormController::class,'album']);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test',function(){
   return view('temp.flowlift');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
require __DIR__.'/auth.php';

// ・仮登録メール機能の動作を確認する①：　新規ユーザー登録

// 　http://localhost/register で、ユーザーを追加する

// 　ユーザー名、メールアドレス、パスワードを入力して「REGISTER」ボタンをクリックする

// 　http://localhost/verify-email に遷移すればOK


// ・仮登録メールの動作を確認する②：　仮登録メールのURLをクリックしてユーザー登録を完了する

// 　http://localhost:8025/ にアクセスし、件名「Verify Email Address」の仮登録メールが届いていることを確認する

// 　仮登録メールを開いて、「Verify Email Address」ボタンをクリックする

// 　Laravelのダッシュボード画面が表示されればOK
