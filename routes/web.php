<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\controlController;


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

//login route
Route::get('/login', 'controlController@index')->name('login');
Route::get('/signup', 'controlController@index')->name('signup');
//////////////show book
Route::get('/book', 'controlController@index')->name('book');
////////////////////show category
Route::get('/category', 'controlController@index')->name('category');
//////////////////show author
Route::get('/author', 'controlController@index')->name('author');
///////////////show publishing
Route::get('/publishing', 'controlController@index')->name('publishing');
//admin add route
///add author
Route::get('/add-author',function () {
    return view('admin.admin-add-author');
})->name('add-author');
////////add categiry
Route::get('/add-category',function () {
    return view('admin.admin-add-category');
})->name('add-category');
////////add publishing home
Route::get('/add-publishing-house',function () {
    return view('admin.admin-add-publishing-home');
})->name('add-publishing-house');
////////add book
Route::get('/add-BOOKS','controlController@GetParentInformation')->name('add-BOOKS');
/////////edit book 
Route::get('edit-category/{id}', 'controlController@edit')->name('edit-category');
/////////////////////////////////////////// resource controller
Route::resource('/','controlController');


