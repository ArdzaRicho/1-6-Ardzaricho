<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('about', [
    "nama" => "Ardzaricho R",
    "email" => "bullsdog32739@gmail.com",
    "gambar" => "gambarku.jpg"
    ]);
});
    
Route::get('/gallery', function () {
        return view('Gallery', [
            "nama" => "Ardzaricho R",
            "gambar" => "gambarku.jpg"
        ]);

});