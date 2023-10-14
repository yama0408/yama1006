<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;      //追加
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
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する


//8-2
//Route::get('/', function() {
    //return view('posts.index');
//});
//Route::get('/', function () {
    //return view('welcome');
//});
?>