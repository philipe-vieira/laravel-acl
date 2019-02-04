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

Route::get('/', 'Portal\SiteController@index');

Auth::routes();

Route::group(['prefix' => 'painel'], function (){
    //PostController
    Route::get('/posts','Painel\PostController@index');

    //PermissionController
    Route::get('/permissions','Painel\PermissionController@index');

    //RoleController
    Route::get('/roles','Painel\RoleController@index');

    Route::get('/role/{id}/permissions','Painel\RoleController@permissions');

    //UserController
    Route::get('/users','Painel\UserController@index');

    //PainelController
    Route::get('/','Painel\PainelController@index')->name('painel');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}/update', 'HomeController@update')->name('update');

Route::get('/roles-permissions', 'HomeController@rolesPermissions')->name('rolesPermissions');
