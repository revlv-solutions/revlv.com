<?php

Route::view('/', 'pages.landing.index');
Route::view('profile', 'pages.profile');
Route::view('solutions', 'pages.solutions');
Route::view('products', 'pages.products');
Route::view('clients', 'pages.clients');
Route::view('careers', 'pages.careers');
Route::view('privacy-policy', 'pages.privacy-policy');
Route::view('/products/rsinet', 'pages.products.rsinet');
Route::view('/products/sentry', 'pages.products.sentry');
Route::view('/products/sentinel', 'pages.products.sentinel');
Route::view('/products/tender', 'pages.products.tender');
Route::view('/products/fcovid', 'pages.products.fcovid');

Route::get('contact-us', 'ContactPageController@showPage')->name('contact')->middleware('inject-keys');
Route::post('contact-us', 'ContactPageController@submit')->name('contact.submit');
