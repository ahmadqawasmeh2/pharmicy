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
//getpages pharmicy
Route::get('/','pages@index');
Route::get('/Adding','pages@Adding');
Route::get('/AddingMedicine','pages@AddingMedicine');
Route::get('/mailbox','pages@mailbox');
Route::get('/Addinguser','pages@Addinguser');
Route::get('/Reciper','pages@Reciper');
Route::get('/Company','pages@Company');
Route::get('/Information','pages@Information');
Route::get('/compose','pages@compose');
Route::get('/read','pages@read');
Route::get('/profile','pages@profile');
Route::get('/Recipers','pages@Recipers');
Route::get('/login','pages@login');
Route::get('/register','pages@register');
Route::get('/forgetpasswor','pages@forget');
Route::get('/newpass','pages@newpass');
Route::get('/storecompany','pages@storecompany');
Route::get('/shopsingle','pages@shopsingle');
Route::get('/searchdrug','pages@drug');
Route::get('/insert','pages@insert');
Route::get('/Nearing','pages@Nearing');
//endgetpages pharimcy

//getpagesdoctor
// Route::get('/inde','pages@inde');
Route::get('/write','pages@Addin');
Route::get('/Recipe','pages@Recip');
Route::get('/profil','pages@profil');
Route::get('/Recip','pages@Recip');
Route::get('/logi','pages@logi');
Route::get('/registe','pages@registe');
Route::get('/forgetpassword','pages@foge');
Route::get('/newpassword','pages@newpassw');
Route::get('/SearchDrug','pages@SearchDrug');
//endgetpagesdoctor

//start  get company pages
Route::get('/home','pages@home');
Route::get('/AddDrug','pages@AddDrug');
Route::get('/warehouses','pages@warehouses');
Route::get('/AddRepresentative','pages@AddRepresentative');
Route::get('/Inbox','pages@Inbox');
Route::get('/composee','pages@composee');
Route::get('/reade','pages@reade');
Route::get('/All','pages@All');
Route::get('/informations','pages@informations');
Route::get('/salespharmicy','pages@salespharmicy');
Route::get('/pharmicy','pages@pharmicy');
Route::get('/total','pages@total');
Route::get('/totalware','pages@totalware');
Route::get('/warehousess','pages@warehousess');
Route::get('/reportdrug','pages@reportdrug');
Route::get('/storess','pages@stores');




