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

//Route::get('/','TBordController@index');
Route::get('/',function(){
    return view('FrontOffice/index');
});

Route::get('/about',function(){
    return view('FrontOffice/about');
});
Route::get('/contact',function(){
    return view('FrontOffice/contact');
});
Route::get('/articles',function(){
    return view('FrontOffice/articles');
});
Route::get('/categories',function(){
    return view('FrontOffice/categories');
});

//Route::get('admin/articles','BackOffice\ArticleController@index')->middleware('auth');

Route::prefix('admin')
    ->namespace('BackOffice')
    ->name('admin.')
    ->middleware('auth')
    ->group(function(){
        Route::get('articles','ArticleController@index');
    });

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', function(){
    return redirect('/admin/articles');
})->name('home');
