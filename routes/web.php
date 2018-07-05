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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::group(['prefix'=>'/admin','middleware'=>'auth'],function(){
    //Course's routing
    Route::resource('/courses','CourseController');
    //Trainer's routing
    Route::resource('/trainers','TrainerController');
    //Enuiry routing
    Route::resource('/enquiries','EnquiryController');
    //Booking routing
    Route::resource('/bookings','BookingController');
    //Shifts routing
    Route::resource('/shifts','ShiftController');
    //Vehicles routing
    Route::resource('/vehicles','VehicleController');
    //DurationType routing
    Route::resource('/durationtypes','DurationTypeController');
    //Dashboard routing
    Route::resource('/dashboard','DashboardController');

    Route::get('/usersajax','DatatablesController@getUserAjax');
    Route::get('/usersdata','DatatablesController@getUserData');

    // Route::controller('datatables', 'DatatablesController', [
    //     'anyData'  => 'datatables.data',
    //     'getIndex' => 'datatables',
    // ]);
});
