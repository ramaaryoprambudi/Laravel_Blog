<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

        Route::prefix('auth')->name('author')->group(function () {
        Route::middleware('guest:web')->group(function () {
        Route::view('/login','Backend.pages.auth.login')->name('login');
        Route::view('/register','Backend.pages.auth.register')->name('register');
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


        Route::prefix('posts')->name('posts')->group(function(){
        Route::view('/add-posts','Backend.pages.add-posts')->name('add-posts');
        Route::view('/all-posts','Backend.pages.all_posts')->name('all_posts');
});


});

Route::middleware(['auth:web','route_admin'])->group(function(){
        Route::view('/settings','Backend.pages.settings')->name('settings');
        Route::view('/authors','Backend.pages.authors')->name('authors');

});

});



//Route::redirect('/auth','/auth/login',302);
Route::permanentRedirect('/auth','/auth/login');
