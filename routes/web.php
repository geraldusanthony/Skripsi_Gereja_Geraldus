<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tambahumat_Controller;
use App\Http\Controllers\Daftarumat_Controller;
use App\Http\Controllers\Persembahan_Controller;
use App\Http\Controllers\Umat_Controller;
use App\Http\Controllers\Pendaftaran_Controller;

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

Route::get('/home.admin', function () {
    return view('admin.home');
});
Route::get('/login','Admin_Controller@login'); 
Route::get('/loginpage','Admin_Controller@loginpage'); 

Route::get('/home','Admin_Controller@home'); 

Route::get('/statistik','Statistik_Controller@statistik'); 

Route::get('/tambahumat','Tambahumat_Controller@tambahumat'); 
Route::post('/addumat','Tambahumat_Controller@tambahdata'); 
route::get('/deleteumat/{id}','Tambahumat_Controller@deleteumat');
route::get('/prosesviewdata/{id}','Tambahumat_Controller@findid');
route::post('/editumat/{id}','Tambahumat_Controller@editumat')->name('editumat');

Route::get('/daftarumat','Daftarumat_Controller@daftarumat'); 
Route::get('/profileumat/{id}','Umat_Controller@viewdaftarumat'); 

Route::get('/jadwalmisa','Jadwalmisa_Controller@jadwalmisa'); 
Route::post('/addjadwalmisa','Jadwalmisa_Controller@addjadwalmisa');
route::get('/deletejadwal/{id}','Jadwalmisa_Controller@deletejadwal');
route::get('/viewdata/{id}','Jadwalmisa_Controller@findjadwal');
route::get('/editjadwal/{id}','Jadwalmisa_Controller@editjadwal')->name('editjadwal');

Route::get('/pendaftaran','Jadwalmisa_Controller@pendaftaran'); 

Route::get('/persembahan','Persembahan_Controller@persembahan'); 
Route::post('/addpersembahan','Persembahan_Controller@addpersembahan'); 
route::get('/deletepersembahan/{id}','Persembahan_Controller@deletepersembahan');
route::get('/viewdatapersembahan/{id}','Persembahan_Controller@findpersembahan');
route::get('/editpersembahan/{id}','Persembahan_Controller@editpersembahan')->name('editpersembahan');

Route::get('/jadwalkegiatan','Jadwalkegiatan_Controller@jadwalkegiatan'); 
Route::post('/addjadwalkegiatan','Jadwalkegiatan_Controller@addjadwalkegiatan');
route::get('/deletejadwalkegiatan/{id}','Jadwalkegiatan_Controller@deletejadwalkegiatan');
route::get('/viewdatakegiatan/{id}','Jadwalkegiatan_Controller@findjadwalkegiatan');
route::get('/editjadwalkegiatan{id}','Jadwalkegiatan_Controller@editjadwalkegiatan')->name('editjadwalkegiatan');

Route::get('/datamisaumat','Pendaftaran_Controller@datamisaumat'); 

Route::get('/validasi','Pendaftaran_Controller@datamisa'); 
Route::get('/homeumat','Pendaftaran_Controller@homeumat'); 
Route::post('/addpendaftaran','Pendaftaran_Controller@addpendaftaran');  
route::get('/deletependaftaran/{id}','Pendaftaran_Controller@deletependaftaran');

Route::get('/indexumat','Umat_Controller@indexumat');
Route::get('/login','Umat_Controller@login');
Route::get('/viewpersembahan','Umat_Controller@viewpersembahan');
Route::get('/viewkegiatan','Umat_Controller@viewkegiatan');
Route::get('/viewjadwalmisa','Umat_Controller@viewjadwalmisa');

// Route::group(['namespace' => 'App\Http\Controllers'], function()
// {   
//     /**
//      * Home Routes
//      */
//     Route::get('/index', 'home_Controller@index')->name('home.index');

//     Route::group(['middleware' => ['guest']], function() {
//         /**
//          * Register Routes
//          */
//         Route::get('/register', 'register_Controller@show')->name('register.show');
//         Route::post('/register', 'register_Controller@register')->name('register.perform');

//         /**
//          * Login Routes
//          */
//         Route::get('/login', 'login_controller@show')->name('login.show');
//         Route::post('/login', 'login_controller@login')->name('login.perform');

//     });

//     Route::group(['middleware' => ['auth']], function() {
//         /**
//          * Logout Routes
//          */
//         Route::get('/logout', 'logout_Controller@perform')->name('logout.perform');
//     });
// });