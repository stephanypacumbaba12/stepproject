<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(SampleController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::get('registration', 'registration')->name('registration');
    Route::get('logout', 'logout')->name('logout');
    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
    Route::post('validate_login', 'validate_login')->name('sample.validate_login');
    Route::get('home', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('product', 'product')->name('product');
    Route::get('services', 'services')->name('services');
    Route::get('faq', 'faq')->name('faq');
    Route::get('admin', 'admin')->name('admin');

    // Modified profile route with required parameter
    Route::get('profile/{user_id}', 'profile')->name('profile');

});

//Optional Parameter
