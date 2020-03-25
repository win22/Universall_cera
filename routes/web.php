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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ceramique_universall_admin', 'SuperAdminController@index');
Route::post('/authentification', 'SuperAdminController@connexion')->name('signin_connexion_user_admin');

Route::get('/dashboard', 'DashboardController@index');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function ()
{
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/logout', 'DashboardController@logout');
    Route::post('/view_message/test', 'DashboardController@view_mess');
    Route::get('delete_message/{id}', 'DashboardController@delete_mess');
    Route::get('delete_message_n/{id}', 'DashboardController@delete_mess_n');
    Route::get('/all_admin', 'AdminController@all_admin');
    Route::get('/delete_admin/{id}', 'AdminController@supprimer');
    Route::get('/active_admin/{id}', 'AdminController@active_admin');
    Route::get('/desactive_admin/{id}', 'AdminController@desactive_admin');
    Route::post('/save_admin', 'AdminController@save');
    Route::post('/update_admin/test', 'AdminController@update');


    //-------------Partie Sol-------------
    Route::get('/all_sol', 'SolController@index')->name('sol');
    Route::get('/active_sol/{id}', 'SolController@actives')->name('sol_active');
    Route::get('/detail_sol/{id}', 'SolController@details')->name('detail_sol');
    Route::get('/desactive_sol/{id}', 'SolController@desactives')->name('sol_desactive');
    Route::post('/save_sol', 'SolController@save')->name('sol_save');
    Route::post('/search_sol', 'SolController@search')->name('sear_sol');
});
