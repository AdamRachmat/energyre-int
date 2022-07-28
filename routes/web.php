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
    return view('home');
});
//Route::get('/financial', function () {
  //  return view('financial');
//});
//-----------ROUTING ALAMAT HALAMAN BIASA----------------
Route::get('/financial','App\Http\Controllers\HomeController@maintenance');
Route::get('/scope','App\Http\Controllers\HomeController@scope');
Route::get('/energy','App\Http\Controllers\HomeController@energy');
Route::get('/marine','App\Http\Controllers\HomeController@marine');
Route::get('/konstruksi','App\Http\Controllers\HomeController@konstruksi');
Route::get('/liability','App\Http\Controllers\HomeController@liability');
Route::get('/property','App\Http\Controllers\HomeController@property');
Route::get('/others','App\Http\Controllers\HomeController@others');
Route::get('/maintenance','App\Http\Controllers\HomeController@maintenance');
// ----------- ROUTING BILINGUAL -----------------
Route::get('/{locale}/home', function ($locale) {
  App::setLocale($locale);
  return view('home');
});
Route::get('/{locale}/scope', function ($locale) {
  App::setLocale($locale);
  return view('scope');
});
Route::get('/{locale}/energy', function ($locale) {
  App::setLocale($locale);
  return view('energy');
});
Route::get('/{locale}/marine', function ($locale) {
  App::setLocale($locale);
  return view('marine');
});
Route::get('/{locale}/konstruksi', function ($locale) {
  App::setLocale($locale);
  return view('konstruksi');
});
Route::get('/{locale}/property', function ($locale) {
  App::setLocale($locale);
  return view('property');
});
Route::get('/{locale}/liability', function ($locale) {
  App::setLocale($locale);
  return view('liability');
});
Route::get('/{locale}/others', function ($locale) {
  App::setLocale($locale);
  return view('others');
});
//-------------ROUTE EMAIL CONTACT US------------
Route::get('/home','App\Http\Controllers\ContactController@showContactForm');
Route::post('/homepost', 'App\Http\Controllers\ContactController@sendMail');
Route::get('/others','App\Http\Controllers\HomeController@others');
//---------------------------------------------------------
Route::get('/home/en','App\Http\Controllers\HomeController@homeen');
