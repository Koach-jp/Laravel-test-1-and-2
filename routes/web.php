<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\InquiryController;


Route::get('/', function () {
    return '
    <center style="font-weight: bold">Laravel入門 テスト</center>
    「<a href="/building"> /building </a>」：「建物です」表示<br>
    「 /building/{num} 」：「部屋番号は{num}です」表示<br><br>
    <center style="font-weight:bold">Laravel応用 テスト</center>
    「<a href="/top"> /top </a>」：お問い合わせフォームへ
    ';
});

Route::group(['prefix' => '/building'], function(){
    Route::get('/', [BuildingController::class, 'buildingGet']);
    Route::get('/{room}', [BuildingController::class, 'roomGet']);
});

Route::get('/top', [InquiryController::class, 'inquiryGet']);
Route::post('/top', [InquiryController::class, 'inquiryPost']);