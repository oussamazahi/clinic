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

Route::get('/liste_des_patient','PatientController@liste_des_patient')->name('liste_patient');
Route::get('/ajouter_patient','PatientController@ajouter_patient')->name('ajouter_patient');
Route::post('/liste_des_patient','PatientController@store')->name('store_patient');
Route::delete('/liste_des_patient/{id}','PatientController@destroy')->name('destroy_patient');
Route::get('/edit_patient/{id}','PatientController@edit')->name('edit_patient');
Route::post('/update_patient/{id}','PatientController@update')->name('update_patient');


Route::get('/liste_des_medicament','MedicamentController@liste_des_medicament')->name('liste_medicament');
Route::get('/ajouter_medicament','MedicamentController@ajouter_medicament')->name('ajouter_medicament');
Route::post('liste_des_medicament','MedicamentController@store')->name('store_medicament');
Route::delete('/liste_des_medicament/{id}','MedicamentController@destroy')->name('destroy_medicament');
Route::get('/edit_medicament/{id}','MedicamentController@edit')->name('edit_medicament');
Route::post('/update_medicament/{id}','MedicamentController@update')->name('update_medicament');




Route::get('/liste_des_rendez_vous','Rendez_vousController@liste_des_rendez_vous')->name('liste_rendez_vous');
Route::get('/ajouter_rendez_vous','Rendez_vousController@ajouter_rendez_vous')->name('ajoutre_rendez_vous');
Route::post('/liste_des_rendez_vous','Rendez_vousController@store')->name('store_rendez_vous');
Route::delete('/liste_des_rendez_vous/{id}','Rendez_vousController@destroy')->name('destroy_rendez_vous');
Route::get('/edit_rendez_vous/{id}','Rendez_vousController@edit')->name('edit_rendez_vous');
Route::post('/update_rendez_vous/{id}','Rendez_vousController@update')->name('update_rendez_vous');


Route::get('/liste_des_consultation','ConsultationController@liste_des_consultation')->name('liste_consultation');
Route::get('/ajouter_consultation','ConsultationController@ajouter_consultation')->name('ajouter_consultation');
Route::post('/liste_des_consultation','ConsultationController@store')->name('store_consultation');
Route::delete('/liste_des_consultation/{id}','ConsultationController@destroy')->name('destroy_consultation');
Route::get('/edit_consultation/{id}','ConsultationController@edit')->name('edit_consultation');
Route::post('/update_consultation/{id}','ConsultationController@update')->name('update_consultation');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/wel', function () {
    return view('welcome1');
});
