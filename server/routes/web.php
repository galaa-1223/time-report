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

// Route::get('/', function () {
//     return redirect()->route('index');
// })->name('/');


// Route::prefix('dashboard')->group(function () {
//     Route::view('index', 'pages.dashboard.index')->name('index');
// });

// Route::prefix('users')->group(function () {
//     Route::view('user-profile', 'apps.user-profile')->name('user-profile');
//     Route::view('edit-profile', 'apps.edit-profile')->name('edit-profile');
//     Route::view('user-cards', 'apps.user-cards')->name('user-cards');
// });

// Route::prefix('blog')->group(function () {
//     Route::view('/', 'apps.blog')->name('blog');
//     Route::view('blog-single', 'apps.blog-single')->name('blog-single');
//     Route::view('add-post', 'apps.add-post')->name('add-post');
// });


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'DashboardController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {

        Route::get('/logout', 'LogoutController@perform')->name('logout');
        
    });
});

