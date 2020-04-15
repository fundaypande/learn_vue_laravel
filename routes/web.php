<?php

// Tutorial https://medium.com/@erthru/laravel-dan-vue-part-1-laravel-sebagai-backend-defafdd7ed0c

// dengan menggunakan ini, artinya kamu menggunakan route dasar vue
// API harus berada di luar ekosistem laravel ini
// Route::get('/{any}', function () {
//     return view('welcome');
// })->where('any','.*');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// menambahkan route untuk person
Route::get('api/note','NoteCont@all');
Route::get('api/note/{id}','NoteCont@show');
Route::post('api/note','NoteCont@store');
Route::put('api/note/{id}','NoteCont@update');
Route::delete('api/note/{id}','NoteCont@delete');
