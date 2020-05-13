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

Route::get('/main', function () {
   return view('main');
});

Route::get('/', function () {
     return view('layout.logintemp');
});

// Route::get('/', function () {
//      return view('dashboard');
//  });


Route::post('/loginme', 'TeachersController@index');

Route::get('/gotosignup', function () {
    return view('layout.signup');
});
Route::post('/Dashboard', 'TeachersController@store');

// Route::post('/signup', 'TeachersController@store');

Route::get('/Dashboard', function () {
    return view('dashboard');
});

// Route::post('/dashboards', 'loginController@login');
//Route::get('/BiodataSiswa', 'BiodataSiswaController@index');

//StudentsController Manual

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}','StudentsController@destroy');
Route::get('/students/{student}/edit','StudentsController@edit');
Route::patch('/students/{student}','StudentsController@update');

//Using Controller Resource from Laravel
// Route::resource('students', 'StudentsController');

Route::get('/scorestudents', 'ScoreStudentsController@index');
Route::get('/scorestudents/{student}', 'ScoreStudentsController@show');

//Route::resource('score_students', 'ScoreStudentsController');

//Route::get('/BiodataSiswa/{student}', 'BiodataSiswaController@show');

//Route::get('/BiodataSiswa', function () {
//    return view('biodatasiswa');
//});

Route::get('/NilaiSiswa', function () {
    return view('nilaisiswa');
});

Route::get('/Asrama', function () {
    return view('asrama');
});

Route::get('/ProfilWaliKelas', function () {
    return view('profilwalikelas');
});

Route::get('/DataGuru', function () {
    return view('dataguru');
});
