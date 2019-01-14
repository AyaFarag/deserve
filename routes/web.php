<?php

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


// Auth::routes();


// Route::prefix('admin')->middleware(['admin', 'auth:admin'])->group(function () {

    
    Route::get('login/form', 'AdminController@loginForm');
    Route::post('/admin/login', 'AdminController@login')->name('admin.login');
    
    Route::get('/register/admin', 'AdminController@showRegistrationForm');
    Route::post('/register/r', 'AdminController@register');
    
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/logout/admin', 'AdminController@logout')->name('admin.logout');
    
    // admin login and register routes
    
    Route::resource('/slider', 'SliderController');
    
    Route::resource('/page', 'PageController');
    
    Route::resource('/section', 'SectionController');
    
    Route::resource('/partition', 'PartitionController');
    
    Route::resource('/category', 'CategoryController');
    
    Route::resource('/tags', 'TagController');
    
    Route::resource('/footer', 'FooterController');
    
    Route::resource('/carousel', 'CarouselController');
    
    Route::resource('/packages', 'PackageController');
    
    Route::resource('/contacts', 'ContactusController');
    
    Route::resource('/subscriber', 'SubscriberController');
    
    Route::resource('/ads', 'AdController');
    
    Route::resource('/FAQ', 'FAQController');
    
    Route::resource('/survey', 'SurveyController');
    
    Route::resource('/orders', 'OrderController');
    
    // });
    
    Auth::routes();
    
    Route::get('/', function () {
        return view('user.home');
    });
    
Route::get('/home', 'HomeController@index')->name('home');
