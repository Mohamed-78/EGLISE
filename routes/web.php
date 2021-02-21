<?php


Route::get('/', function () {
	return view('front.index');
});
//--------------------------SITE WEB-----------------------------------
Route::get('/', 'websiteController@index')->name('accueil');
Route::get('/services', 'websiteController@services')->name('services');
Route::get('/presentation', 'websiteController@presentation')->name('presentation');
Route::get('/contacts', 'websiteController@contacts')->name('contacts');
Route::get('/orphelinat', 'websiteController@orphelinat')->name('orphelinat');
Route::get('/actualites', 'websiteController@actualites')->name('actualites');
Route::get('/collections', 'websiteController@collections')->name('collections');
Route::get('/single_actu/{id}', 'websiteController@single_actu')->name('single_actu');
Route::get('/single_collection/{id}', 'websiteController@single_collection')->name('single_collection');
Route::get('/enseignement', 'websiteController@enseignement')->name('enseignement');

Route::post('/poster_message', 'websiteController@send_msg')->name('send_msg');

Auth::routes();

Route::get('/connexion/user', 'ConnexionController@authenticate');


Route::get('/managment/missionnaire2jesus/index', 'HomeController@index')->name('home');
Route::get('/managment/ajouter/actualites', 'HomeController@ajouter_actu')->name('actu');
Route::get('/managment/missionnaire2jesus/collection', 'HomeController@collection')->name('collection');
Route::get('/managment/missionnaire2jesus/message', 'HomeController@message')->name('message');
Route::get('/managment/missionnaire2jesus/construction', 'HomeController@construction')->name('construction');
Route::get('/managment/missionnaire2jesus/verset', 'HomeController@verset')->name('verset');
Route::get('/managment/missionnaire2jesus/realisations', 'HomeController@real')->name('real');
Route::get('/managment/ajouter/terrain', 'HomeController@ajouter_terrain')->name('ajouter_terrain');
Route::get('/managment/ajouter/verset', 'HomeController@ajouter_verset')->name('ajouter_verset');
Route::get('/managment/ajouter/collection', 'HomeController@ajouter_collection')->name('ajouter_collection');
Route::get('/managment/ajouter/appart', 'HomeController@ajouter_appart')->name('ajouter_appart');
Route::get('/managment/ajouter/construction', 'HomeController@ajouter_construction')->name('ajouter_construction');
Route::get('/managment/ajouter/realisation', 'HomeController@ajouter_realisation')->name('ajouter_realisation');
Route::get('/managment/update/actu/{id}', 'HomeController@update_actu')->name('update_actu');
Route::get('/managment/update/const/{id}', 'HomeController@update_const')->name('update_const');
Route::get('/managment/view/msg/{id}', 'HomeController@view_msg')->name('view_msg');
Route::get('/managment/update/real/{id}', 'HomeController@update_real')->name('update_real');
Route::get('/managment/delete/actu/{id}', 'HomeController@delete_actu')->name('delete_actu');
Route::get('/managment/delete/const/{id}', 'HomeController@delete_const')->name('delete_const');
Route::get('/managment/delete/versets/{id}', 'HomeController@delete_verset')->name('delete_verset');
Route::get('/managment/delete/messages/{id}', 'HomeController@delete_msg')->name('delete_msg');
Route::get('/managment/delete/lot/{id}', 'HomeController@delete_lot')->name('delete_lot');
Route::post('/managment/ajout/verset', 'HomeController@add_versets');
Route::post('/managment/updated/actu/{id}', 'HomeController@updated_actu')->name('updated_actu');
Route::post('/managment/ajout/actu', 'HomeController@add_actu');
Route::post('/managment/ajout/collection', 'HomeController@add_collection');
Route::get('/managment/update/lot/{id}', 'HomeController@update_lot')->name('update_lot');
Route::post('/managment/updated/versets/{id}', 'HomeController@updateds_versets');
Route::post('/managment/ajout/const', 'HomeController@add_const');
Route::post('/managment/updated/constr/{id}', 'HomeController@updated_constr');
Route::post('/managment/updated/real/{id}', 'HomeController@updated_real');
Route::post('/managment/ajout/real', 'HomeController@add_realisation');
Route::post('/managment/ajout/locations', 'HomeController@add_locations');
Route::get('/managment/update/versets/{id}', 'HomeController@updated_verset')->name('updated_verset');
Route::get('/managment/update/collections/{id}', 'HomeController@update_collections')->name('update_collections');
Route::post('/managment/updated/locations/{id}', 'HomeController@updated_location');
Route::get('/managment/delete/collections/{id}', 'HomeController@delete_collection')->name('delete_collection');
Route::post('/managment/ajout/apparts', 'HomeController@add_apparts');
Route::get('/managment/update/apparts/{id}', 'HomeController@update_apparts')->name('update_apparts');

Route::post('/managment/updated/collections/{id}', 'HomeController@updated_collections');
Route::get('/managment/delete/apparts/{id}', 'HomeController@delete_apparts')->name('delete_apparts');
