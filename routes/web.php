<?php

use Illuminate\Support\Facades\Route;

// ルーティングを設定するコントローラを宣言する
// ①
use App\Http\Controllers\HelloController;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\VendorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 「https://ドメイン名/hello」というURLにアクセスした時、HelloControllerに定義されているindex()という名前のアクションを実行したいという場合
//②
// Route::HTTPリクエストメソッド名('URL', [コントローラ名::class, 'アクション名']);
Route::get('/hello', [HelloController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

// /products/1」「/products/10」のようにURLの一部を変化させてその値を取得したい場合:ルーティングでURLを設定するときにその一部を中括弧{}で囲む。
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/{id}', [ProductController::class, 'show']);