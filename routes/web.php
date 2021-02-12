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

// Route::get('/', function () {
//     return view('register');
// });

Route::get('/','HomeController@index');
Route::get('/home','HomeController@home');

Route::get('/addflower','FlowersController@addFlower');
Route::post('flowerpost','FlowersController@flowerpost');


Route::get('/login','LoginController@login');
Route::post('loginpost','LoginController@loginpost');

Route::get('/register','RegisterController@register');
Route::post('registerpost','RegisterController@registerpost');

Route::get('/logout','LoginController@logout');

Route::get('/changepass','LoginController@changepassword');

Route::get('/viewflowers/{category}','FlowersController@viewFlower');
Route::get('/buyflower/{flower}','FlowersController@buyflower');

Route::get('/viewcart','HomeController@cart');
Route::post('/cartflower/{flower}','FlowersController@cartpost');

Route::get('/delete/{flower}','HomeController@deleteflower');

Route::post('/updatepost/{transaction}','FlowersController@updateCart');

Route::get('/transact','HomeController@transact');
Route::get('/thistory','HomeController@viewtransact');



