<?php

use App\Http\Controllers\Teacher\Auth\LoginController;
use App\Http\Controllers\Teacher\DashboardController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Teacher\Auth\LoginController;
Route::group(['namespace' => 'App\Http\Controllers\Teacher', 'as' => 'teacher.'], function () {

    /*authentication*/
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth', 'as' => 'auth.'], function () {
//echo "gfklfk"; exit;
        Route::get('login',[LoginController::class,'login'])->name('login')->withoutMiddleware('teacher');
        Route::post('submit-login', 'LoginController@submit')->name('postLogin')->withoutMiddleware('teacher');


        Route::get('logout', 'LoginController@logout')->name('logout');
    });
    /*authentication*/



Route::group(['middleware' => ['teacher']], function () {
    //dashboard
  // echo "kfddl"; exit;
    Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');

});
});
