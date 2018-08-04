<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('dkms', 'dkmAPIController');

Route::resource('penganggurans', 'pengangguranAPIController');

Route::resource('pengajars', 'pengajarAPIController');

Route::resource('donasis', 'donasiAPIController');

Route::resource('belajars', 'belajarAPIController');

Route::resource('jadwals', 'jadwalAPIController');

Route::resource('penggunas', 'penggunaAPIController');

Route::resource('laporans', 'laporanAPIController');