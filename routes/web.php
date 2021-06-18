<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#首頁
Route::get('/', 'App\Http\Controllers\HomeController@indexPage');

//User route group
Route::group(['prefix' => 'user'], function(){
    //User auth
    Route::group(['prefix' => 'auth'], function() {
        #User sign up
        Route::get('/sign-up', 'App\Http\Controllers\UserAuthController@signUpPage');
        Route::post('/sign-up', 'App\Http\Controllers\UserAuthController@signUpProcess');
        #User sign in
        Route::get('/sign-in', 'App\Http\Controllers\UserAuthController@signInPage');
        Route::post('/sign-in', 'App\Http\Controllers\UserAuthController@signInProcess');
        #User sign out
        Route::get('/sign-out', 'App\Http\Controllers\UserAuthController@signOut');
    });
});

?>