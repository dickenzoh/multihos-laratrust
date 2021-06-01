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

Route::get('/', function () {
    return view('welcome');
});

// for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/calendar', 'App\Http\Controllers\Admin\QueueController@index')->name('calendar');
    Route::get('/phamreports', 'App\Http\Controllers\Admin\ReportsController@index')->name('phamreports');
    Route::get('/phampatient', 'App\Http\Controllers\Admin\PatientController@index')->name('phampatient');
});

//auth route for everybody
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

// for doctors
Route::group(['middleware' => ['auth', 'role:doctor']], function() { 
    Route::get('/docqueue', 'App\Http\Controllers\Doctor\QueueController@index')->name('docqueue');
    Route::get('/docpatient', 'App\Http\Controllers\Doctor\PatientController@index')->name('docpatient');
    Route::get('/ipd', 'App\Http\Controllers\Doctor\IpdController@index')->name('ipd');
    Route::get('/doccalendar', 'App\Http\Controllers\Doctor\CalendarController@index')->name('doccalendar');
});

// for regclerk
Route::group(['middleware' => ['auth', 'role:regclerk']], function() { 
    Route::get('/regpatientreg', 'App\Http\Controllers\Regclerk\RegpatientController@index')->name('regpatientreg');
    Route::get('/regreports', 'App\Http\Controllers\Regclerk\ReportsController@index')->name('regreports');
    Route::get('/regcalendar', 'App\Http\Controllers\Regclerk\CalendarController@index')->name('regcalendar');
});

// for billclerk
Route::group(['middleware' => ['auth', 'role:billclerk']], function() { 
    Route::get('/billqueue', 'App\Http\Controllers\Billclerk\QueueController@index')->name('billqueue');
    Route::get('/billpatientreg', 'App\Http\Controllers\Billclerk\PatientregController@index')->name('billpatientreg');
    Route::get('/billreports', 'App\Http\Controllers\Billclerk\ReportsController@index')->name('billreports');
    Route::get('/billpatient', 'App\Http\Controllers\Billclerk\PatientController@index')->name('billpatient');
    Route::get('/ipdbill', 'App\Http\Controllers\Billclerk\IpdbillController@index')->name('ipdbill');
    Route::get('/billcalendar', 'App\Http\Controllers\Billclerk\CalendarController@index')->name('billcalendar');
});

// for labtech
Route::group(['middleware' => ['auth', 'role:labtech']], function() { 
    Route::get('/labqueue', 'App\Http\Controllers\Labtech\QueueController@index')->name('labqueue');
    Route::get('/labreports', 'App\Http\Controllers\Labtech\ReportsController@index')->name('labreports');
    Route::get('/labpatient', 'App\Http\Controllers\Labtech\PatientController@index')->name('labpatient');
    Route::get('/labcalendar', 'App\Http\Controllers\Labtech\CalendarController@index')->name('labcalendar');
});

// for radtech
Route::group(['middleware' => ['auth', 'role:radtech']], function() { 
    Route::get('/radqueue', 'App\Http\Controllers\Radtech\QueueController@index')->name('radqueue');
    Route::get('/radreports', 'App\Http\Controllers\Radtech\ReportsController@index')->name('radreports');
    Route::get('/radpatient', 'App\Http\Controllers\Radtech\PatientController@index')->name('radpatient');
    Route::get('/radcalendar', 'App\Http\Controllers\Radtech\CalendarController@index')->name('radcalendar');
});

// for phamasist
Route::group(['middleware' => ['auth', 'role:phamasist']], function() { 
    Route::get('/phamqueue', 'App\Http\Controllers\Phamasist\QueueController@index')->name('phamqueue');
    Route::get('/phamreports', 'App\Http\Controllers\Phamasist\ReportsController@index')->name('phamreports');
    Route::get('/phampatient', 'App\Http\Controllers\Phamasist\PatientController@index')->name('phampatient');
});


require __DIR__.'/auth.php';
