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
// Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.home');
    });

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

// });
