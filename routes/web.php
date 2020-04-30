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
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});


Route::get('/','HomeController@index');



Route::get('/index/feature/user', function () {
    return view('feature');
})->name('users');


































Route::group(['prefix'=>'user','namespace'=>'Admin'],function(){

Route::get('index','AdminController@Index');
Route::get('show','AdminController@Show');
Route::get('show2','AdminController@Show2');
});

 
 Route::resource('news','NewsController');



Route::get('/category','Admin\CategoryController@Index');










Route::get('/alaa','UseController@method');






Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
