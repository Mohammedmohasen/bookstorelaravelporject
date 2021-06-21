<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\controlController;
use Illuminate\Routing\RouteAction;
use Illuminate\Support\Facades\Auth;

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
//get route we are put it here for more regular code and the right thing in the laravel put the  gt code before the resource route
Route::get('index', function () {
    return view('admin.admin-add-author');
});


Route::get('/login', 'controlController@index')->name('login');
Route::get('/recover', 'controlController@index')->name('recover');
Route::get('/signup', 'controlController@index')->name('signup');
Route::resource('/','controlController');


