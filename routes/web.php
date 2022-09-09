<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Slide;
use App\Models\Tag;
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
    $articles = Article::all();
    $tags = Tag::all();
    $categories = Categorie::all();
    //dd($slides);
    return view('FrontOffice/index')->with(compact('slides','articles','tags','categories'));
});

Route::get('/about',function(){
    return view('FrontOffice/about');
});

Route::get('/articles',function(){
    return view('FrontOffice/articles');
});
Route::get('/categories',function(){
    return view('FrontOffice/categories');
});
Route::namespace('FrontOffice')
    ->name('front.')
    ->group(function(){
        Route::get('articles','ArticleController@index');
        Route::get('/article/{id}','ArticleController@show');
        Route::get('/categorie/{id}','ArticleController@getCategorie');
        Route::get('/contact','PageController@contact');
    });

//Route::get('admin/articles','BackOffice\ArticleController@index')->middleware('auth');

Route::prefix('admin')
    ->namespace('BackOffice')
    ->name('admin.')
    ->middleware('auth')
    ->group(function(){
        Route::get('articles','ArticleController@index');
        Route::post('articles','ArticleController@store');
        Route::post('articles/save','ArticleController@save');
        Route::get('/articles/edit/{id}','ArticleController@edit');
        Route::get('/articles/enable/{id}','ArticleController@enable');
        Route::get('/articles/disable/{id}','ArticleController@disable');
        Route::get('/dashboard','DashboardController@index');
        Route::get('/slides','SlideController@index');
        Route::post('/slides','SlideController@store');
        Route::post('article/tag','ArticleController@addTag');
        Route::get('tag/delete/{article_id}/{tag_id}','ArticleController@deleteTag');

        Route::get('/slides/enable/{id}','SlideController@enable');
        Route::get('/slides/disable/{id}','SlideController@disable');
        Route::resource('/categories','CategorieController');
        Route::resource('/tags','TagController');
        Route::get('/categories/enable/{id}','CategorieController@enable');
        Route::get('/categories/disable/{id}','CategorieController@disable');

        Route::get('/tags/enable/{id}','TagController@enable');
        Route::get('/tags/disable/{id}','TagController@disable');
        Route::get('infos','DashboardController@getForm');
        Route::post('infos','DashboardController@saveForm');

    });

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', function(){
    return redirect('/admin/dashboard');
})->name('home');
