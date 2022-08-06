<?php

use App\Http\Controllers\ArticleController;
use App\Models\Slide;
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
    $slides = Slide::where('active',1)->get();
    //dd($slides);
    return view('FrontOffice/index')->with(compact('slides'));
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
        Route::post('articles','ArticleController@store');
        Route::get('/dashboard','DashboardController@index');
        Route::get('/slides','SlideController@index');
        Route::post('/slides','SlideController@store');
        Route::get('/slides/enable/{id}','SlideController@enable');
        Route::get('/slides/disable/{id}','SlideController@disable');
        Route::resource('/categories','CategorieController');
        Route::get('/categories/enable/{id}','CategorieController@enable');
        Route::get('/categories/disable/{id}','CategorieController@disable');
    });

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', function(){
    return redirect('/admin/dashboard');
})->name('home');
