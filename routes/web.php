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

Route::get("/passo/escolher-teorema", "PassoController@escolherTeorema");
Route::get("/passo/teorema/{numero}/escolher-grafo", "PassoController@escolherGrafo");
Route::post("/passo/teorema/{numero}/confirmar", "PassoController@confirmar");

Route::get('/', "ProjetoController@index");
Route::get('/sobre-o-projeto', "ProjetoController@sobreOProjeto");
Route::get('/trabalhos-publicados', "ProjetoController@trabalhosPublicados");
Route::get('/idealizadores', "ProjetoController@idealizadores");

Route::get('/termo-consentimento', "ProjetoController@termoConsentimento");

Route::post('/teorema/{numero}', "TeoremaController@index"); 
