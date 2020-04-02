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

// basic routes
Route::get('/', 'routeHandler@index');
Route::get('/about', 'routeHandler@about');
Route::get('/contactus', 'routeHandler@contact');
Route::get('/signin', 'routeHandler@login');
Route::get('/signup', 'routeHandler@signup');
Route::get('/weekend', 'routeHandler@weekend');
Route::get('/book', 'routeHandler@book');

// Route::get('/data', 'routeHandler@seedata');
Route::post('/mail', 'routeHandler@saveMail');
Route::post('/contact', 'routeHandler@saveContact');

// weekend plans
Route::get('/weekend/munnar', 'weekendHandler@munnar');
Route::get('/weekend/alappuzha', 'weekendHandler@alappuzha');
Route::get('/weekend/ooty', 'weekendHandler@ooty');
Route::get('/weekend/hampi', 'weekendHandler@hampi');
Route::get('/weekend/mysore', 'weekendHandler@mysore');
Route::get('/weekend/madurai', 'weekendHandler@madurai');
Route::get('/weekend/rameshwaram', 'weekendHandler@rameshwaram');
Route::get('/weekend/tirupati', 'weekendHandler@tirupati');
