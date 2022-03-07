<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
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
        
Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']],function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});



