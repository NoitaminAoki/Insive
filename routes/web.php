<?php

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'landing-page');
Route::view('catalog', 'catalog.default')->name('catalog.default');
Route::view('face-result', 'face-result');
Route::view('catalog/selected', 'catalog.selected')->name('catalog.selected');
// Route::view('custom/sheet', 'custom.sheet');
Route::view('contact-us', 'contact')->name('contactus');
// Route::view('custom/fragrance', 'custom.fragrance');
Route::get('/force/logout', 'Home\MainController@logout');
Route::namespace('Home')->middleware('auth')->group(function () {
Route::get('custom/fragrance', 'MainController@fragrance')->name('main.fragrance');
Route::get('custom/sheet', 'MainController@sheet')->name('main.sheet');
Route::get('/pricing', 'MainController@pricing')->name('main.pricing');
Route::get('/question', 'MainController@question')->name('main.question');
Route::post('question/soal/ajax/{id?}', 'MainController@getSoal')->name('main.question.get.soal');
});

Route::prefix('home')->namespace('Home')->name('home.')->middleware('auth')->group(function () {
    Route::get('/face-result', 'MainController@faceResult')->name('main.face.result');
    Route::resource('main', 'MainController');
});
Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::resource('admin', 'AdminController');
    Route::resource('cart', 'CartController');

    Route::post('question/soal/ajax/{id?}', 'QuestionController@getSoal')->name('question.get.soal');
    Route::resource('question', 'QuestionController');
    Route::resource('product', 'ProductController');
    Route::resource('logic', 'LogicController');
});

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');
