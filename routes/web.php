<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','TBordController@index');

Route::get('/Bonjour', function () {
    return ('Hello');
});

Route::get('/Pharaon', function () {
    return ('Life is not a movie');
});

Route::get('/Hello world', function () {
    return view('Hello');
});


Route::get('/Nifty', function () {
    return view('Nifty');
});



Route::get('/home', 'HomeController@index');

// gestion des articles
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/creer', 'ArticleController@creer');
Route::post('/articles/enregistrer', 'ArticleController@enregistrer');




Route::get('/home/{id}', 'HomeController@show');

Route::get('/article/{id}','ArticleController@show');
Route::get('/article/disable/{id}','ArticleController@disable');
Route::get('/article/enable/{id}','ArticleController@enable');

Route::get('article/enregistrer','ArticleController@store');

Route::get('/Article/tous', 'ArticleController@getAll' );

Route::get('/Article/categorie', 'ArticleController@getAll' );

Route::get('/ventes', 'VenteController@index');

Route::get('/ventes/creer', 'VenteController@creer');
Route::get('/ventes/{id}', 'VenteController@show');

Route::post('/ventes/enregistrer', 'VenteController@enregistrer');


Route::get('/livraisons', 'LivraisonController@index');
Route::get('/livraisons/creer', 'LivraisonController@creer');
Route::post('/livraisons/enregistrer', 'LivraisonController@enregistrer');


Route::get('/commandes', 'CommandeController@index');
Route::get('/commandes/creer', 'CommandeController@creer');
Route::post('/commandes/enregistrer', 'CommandeController@enregistrer');


Route::get('/fournisseurs', 'FournisseurController@index');
Route::get('/fournisseurs/creer', 'FournisseurController@creer');
Route::post('/fournisseurs/enregistrer', 'FournisseurController@enregistrer');


Route::get('/employes', 'EmployeController@index');
Route::get('/employes/creer', 'EmployeController@creer');
Route::post('/employes/enregistrer', 'EmployeController@enregistrer');











