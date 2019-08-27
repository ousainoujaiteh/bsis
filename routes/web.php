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
    return redirect()->route('login');
});

Route::get('/admin',function (){
    return view('admin');
});

Route::get('show_hospital',function (){
    return view('hospital.show');
});

Route::get('show_donor',function (){
    return view('donors.show');
});
Route::resource('users','UserController');
Route::resource('donors','DonorController');
Route::resource('donations','DonationController');
Route::resource('hospitals','HospitalController');
Route::resource('blood_tests','BloodTestController');
Route::resource('appointments','AppointmentController');
Route::resource('blood_test_results','BloodTestResultController');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
