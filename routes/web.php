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


//Config site

Route::get('/','HomeController@index');
Route::get('contact', 'HomeController@contacts')->name('contact');
Route::get('about', 'HomeController@abouts')->name('about');
Route::get('/details/{id}', 'ProductController@details')->name('details');


Route::post('/searh', 'ProductController@search')->name('search');
Route::post('/newsletter', 'ProductController@news')->name('newslet');
Route::post('/commande', 'CommandeController@commandeV')->name('comvalide');
Route::get('shop', 'ShopController@shop')->name('shop');
Route::get('/product_by_category/{id}' , 'ProductController@product_category')->name('category');






Route::get('/ceramique_universall_admin', 'SuperAdminController@index');
Route::post('/authentification', 'SuperAdminController@connexion')->name('signin_connexion_user_admin');

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
    Route::get('/delete_sol/{id}', 'SolController@deletes')->name('delete_sol');
    Route::post('/save_sol', 'SolController@save')->name('sol_save');
    Route::post('/search_sol', 'SolController@search')->name('sear_sol');
    Route::post('/update_sol/{id}', 'SolController@updates')->name('update');

    //-------------Partie Faience-------------
    Route::get('/all_faience', 'FaienceController@index')->name('faience');
    Route::get('/active_faience/{id}', 'FaienceController@actives')->name('faience_active');
    Route::get('/detail_faience/{id}', 'FaienceController@details')->name('detail_faience');
    Route::get('/desactive_faience/{id}', 'FaienceController@desactives')->name('faience_desactive');
    Route::get('/delete_faience/{id}', 'FaienceController@deletes')->name('delete_faience');
    Route::post('/save_faience', 'FaienceController@save')->name('faience_save');
    Route::post('/search_faience', 'FaienceController@search')->name('sear_faience');
    Route::post('/update_faience/{id}', 'FaienceController@updates')->name('update_faience');

    //-------------Partie Sanitaire-------------
    Route::get('/all_sanitaire', 'SanitaireController@index')->name('sanitaire');
    Route::get('/active_sanitaire/{id}', 'SanitaireController@actives')->name('sanitaire_active');
    Route::get('/detail_sanitaire/{id}', 'SanitaireController@details')->name('detail_sanitaire');
    Route::get('/desactive_sanitaire/{id}', 'SanitaireController@desactives')->name('sanitaire_desactive');
    Route::get('/delete_sanitaire/{id}', 'SanitaireController@deletes')->name('delete_sanitaire');
    Route::post('/save_sanitaire', 'SanitaireController@save')->name('sanitaire_save');
    Route::post('/search_sanitaire', 'SanitaireController@search')->name('sear_sanitaire');
    Route::post('/update_sanitaire/{id}', 'SanitaireController@updates')->name('update_sanitaire');
});
