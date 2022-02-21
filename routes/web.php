<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    "nama" => "Ardzaricho R",
    "email" => "bullsdog32739@gmail.com",
    "gambar" => "gambarku.jpg"
    ]);
});
    
Route::get('/gallery', function () {
        return view('Gallery', [
            "title" => "Gallery",
            "nama" => "Ardzaricho R",
            "gambar" => "gambarku.jpg"
        ]);

});