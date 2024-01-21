<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

        Route::prefix('auth')->name('author')->group(function () {
        Route::middleware('guest:web')->group(function () {
        Route::view('/login','Backend.pages.auth.login')->name('login');
        Route::view('/register','Backend.pages.auth.register')->name('register');
        Route::view('/Terms Of Service','Backend.pages.auth.termsofservice')->name('termsofservice');
        Route::view('/forgotpassword','Backend.pages.auth.forgot')->name('forgot-password');
        Route::get('/password/reset/{token}',[AuthorController::class,'Resetform'])->name('reset-form');
});

        Route::middleware(['auth:web'])->group(function(){
        Route::get('/home',[AuthorController::class,'index'])->name('home');
        Route::post('logout',[AuthorController::class,'logout'])->name('logout');
        Route::view('/profile','Backend.pages.profile')->name('profile');
        Route::post('/change-profile-picture',[AuthorController::class,'ChangeProfilePicture'])->name('change-profile-picture');
        Route::view('/settings','Backend.pages.settings')->name('settings');
        Route::view('/authors','Backend.pages.authors')->name('authors');
        Route::view('/category','Backend.pages.categories')->name('category');
        Route::view('/technology','Backend.pages.technology')->name('technology');
        Route::view('/business','Backend.pages.business')->name('business');
        Route::view('/lifestyle','Backend.pages.lifestyle')->name('lifestyle');

        Route::prefix('details')->name('details')->group(function(){
        Route::view('/detail-bali','Backend.pages.detail-bali')->name('detail-bali');
        Route::view('/tips-belajar','Backend.pages.tips-belajar')->name('tips-belajar');
        Route::view('/Integrasi AI dalam Kreativitas Manusia','Backend.pages.teknologi-detail')->name('teknologi-detail');
        Route::view('/revolusi-teknologi-dalam-pelayanan-medis','Backend.pages.teknologi-dalam-medis')->name('revolusi-teknologi-dalam-pelayanan-medis');
        Route::view('/Menjelajahi Dunia Baru Komputasi yang Mengejutkan','Backend.pages.teknologi3')->name('teknologi3');

        Route::view('/Strategi Bisnis yang Membuat Perusahaan Bersinar','Backend.pages.bisnis1')->name('bisnis1');
        Route::view('/Praktik Terbaik Meningkatkan Pengalaman Pelanggan','Backend.pages.bisnis2')->name('bisnis2');
        Route::view('/Rahasia Pemasaran Online yang Efektif untuk Bisnis','Backend.pages.bisnis3')->name('bisnis3');

        Route::view('/Digital Detox Menjaga Kesehatan Mental di Era Teknologi','Backend.pages.gaya1')->name('gaya1');
        Route::view('/Mindful Eating','Backend.pages.gaya2')->name('gaya2');

});


        Route::prefix('posts')->name('posts')->group(function(){
        Route::view('/add-posts','Backend.pages.add-posts')->name('add-posts');
        Route::view('/all-posts','Backend.pages.all_posts')->name('all_posts');
        Route::view('/edit-post','Backend.pages.edit_post')->name('edit-Post');
        //Route::post('/update-post',[AuthorController::class,'updatePost'])->name('update-Post');
});


});

Route::middleware(['auth:web','route_admin'])->group(function(){
        Route::view('/settings','Backend.pages.settings')->name('settings');
        Route::view('/authors','Backend.pages.authors')->name('authors');
        Route::view('/category','Backend.pages.categories')->name('category');


});

});

Route::prefix('home')->name('home')->group(function () {
    Route::view('/','Frontend.home')->name('home');
    Route::view('/Tentang-Kami','Frontend.tentang-kami')->name('tentang-kami');
    Route::view('/Syarat Privasi','Frontend.syaratPrivasi')->name('syaratPrivasi');

});



//Route::redirect('/auth','/auth/login',302);
Route::permanentRedirect('/auth','/auth/login');
Route::permanentRedirect('/','/home');
