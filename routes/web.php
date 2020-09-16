<?php

// Front Controller
Route::get('/', 'FrontController@index')->name('index');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/profile','FrontController@profile')->name('profile');
Route::get('/sister-concerns','FrontController@sisterConcerns')->name('sisterConcerns');

Route::get('/service','FrontController@service')->name('service');
Route::get('/service-details','FrontController@serviceDetails')->name('serviceDetails');

Route::get('/project','FrontController@project')->name('project');
Route::get('/project-details','FrontController@projectDetails')->name('projectDetails');

Route::get('/mission','FrontController@mission')->name('mission');
Route::get('/vision','FrontController@vision')->name('vision');

Route::get('/product','FrontController@product')->name('product');
Route::get('/product-details','FrontController@productDetails')->name('productDetails');

Route::get('/team','FrontController@team')->name('team');

Route::get('/news','FrontController@news')->name('news');
Route::get('/news-details','FrontController@newsDetails')->name('newsDetails');

Route::get('/machineries','FrontController@machineries')->name('machineries');
Route::get('/machineries-details','FrontController@machineriesDetails')->name('machineriesDetails');

Route::get('/gallery','FrontController@gallery')->name('gallery');
Route::get('/carrer','FrontController@carrer')->name('carrer');
Route::get('/faq','FrontController@faq')->name('faq');
Route::get('/contact','FrontController@contact')->name('contact');



// Back Controller
Route::get('/dashboard','BackController@dashboard')->name('dashboard');
Route::get('/create-slider','BackController@createSlider')->name('createSlider');
Route::get('/view-slider','BackController@viewSlider')->name('viewSlider');
