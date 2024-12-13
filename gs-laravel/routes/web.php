<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IconController;

Route::get('/', function () {
    return view('test');
});

Route::get('/dashboard', [IconController::class, 'index']);
Route::get('/icon/create',[IconController::class, 'create']);
Route::get('/icon/{icon_id}', [IconController::class, 'show']);

// 以下の部分を追加してください
Route::post('/icon/store',[IconController::class, 'store']);
Route::post('/icon/{icon_id}/update',[IconController::class, 'update']);
Route::post('/icon/{icon_id}/destroy',[IconController::class, 'destroy']);

// 登録用のルート設定の書き方の基本
Route::post('/icon/store', [IconController::class, 'store']);