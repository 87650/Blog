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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//use Illuminate\Routing\Route;



Route::get('/', 'Controllerl@tests');
Route::get('/form','Controllerl@test2');
Route::post('/form', 'RolesControllerl@test1');
//Route::get('/form','Controllerl@test2');
Route::get('/posts','Controllerl@test3');
Route::get('/posts/{id}','Controllerl@test4');
Route::get('/form_/{id}','Controllerl@test5')->middleware('auth');
Route::post('form_/{id}', 'RolesController@test12')->middleware('auth');
Route::post('/posts/{id}','Controllerl@test10')->middleware('auth');
Route::get('/roladmin', 'Role@AddAdminRole');
Route::get('/admin_panel', 'Role@RoleСomparison');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






<form action="Controllers\NetController" method="POST">
            <input type="text" name="name_recipient">
            <input type="text" name="mess">

        <input type="submit" name="mes">

        </form>