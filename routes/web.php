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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','Frontend\FrontendController@index')->name('index');
Route::get('objective','Frontend\FrontendController@objective')->name('objective');
Route::get('admission','Frontend\FrontendController@admission')->name('admission');
Route::get('teacher_info','Frontend\FrontendController@teacherinfo')->name('teacherinfo');
Route::get('contact','Frontend\FrontendController@contact')->name('contact');
Route::get('notice','Frontend\FrontendController@notice')->name('notice');
Route::get('latest_notice','Frontend\FrontendController@Latestnotice')->name('latest_notice');
Route::get('detail_aboutus','Frontend\FrontendController@DetailAboutus')->name('detail_aboutus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix ('users')->group (function () {
    //admin-dashboard
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::post('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});
Route::prefix ('profiles')->group (function () {
    //profile
    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');


});
Route::prefix ('logos')->group (function () {
    //admin-dashboard
    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::post('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
});
Route::prefix ('sliders')->group (function () {
    //admin-dashboard
    Route::get('/view', 'Backend\SliderController@view')->name('sliders.view');
    Route::get('/add', 'Backend\SliderController@add')->name('sliders.add');
    Route::post('/store', 'Backend\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('sliders.update');
    Route::post('/delete/{id}', 'Backend\SliderController@delete')->name('sliders.delete');
});
Route::prefix ('missions')->group (function () {
    //admin-dashboard
    Route::get('/view', 'Backend\MissionController@view')->name('missions.view');
    Route::get('/add', 'Backend\MissionController@add')->name('missions.add');
    Route::post('/store', 'Backend\MissionController@store')->name('missions.store');
    Route::get('/edit/{id}', 'Backend\MissionController@edit')->name('missions.edit');
    Route::post('/update/{id}', 'Backend\MissionController@update')->name('missions.update');
    Route::post('/delete/{id}', 'Backend\MissionController@delete')->name('missions.delete');
});
Route::prefix ('latest_notice')->group (function () {
    //latest notice
    Route::get('/view', 'Backend\LatestNoticeController@view')->name('latest_notice.view');
    Route::get('/add', 'Backend\LatestNoticeController@add')->name('latest_notice.add');
    Route::post('/store', 'Backend\LatestNoticeController@store')->name('latest_notice.store');
    Route::get('/edit/{id}', 'Backend\LatestNoticeController@edit')->name('latest_notice.edit');
    Route::post('/update/{id}', 'Backend\LatestNoticeController@update')->name('latest_notice.update');
    Route::post('/delete/{id}', 'Backend\LatestNoticeController@delete')->name('latest_notice.delete');
});