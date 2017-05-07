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


// HomePage
Route::get('/', ['uses' => 'PageController@home']);



// Redirect slug 'accueil' to '/'
Route::get('/home', function (){
	return redirect('/');
});

// Web program
Route::get('web/programme-des-cours', 'CourseController@indexWeb');
// All
Route::get('cours/{slug}', 'CourseController@show');
Route::get('professeurs/{slug}', 'TeacherController@show');

// Catch-all for Backpack/PageManager
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
     ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

// MenuCrud
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
});

// Admin articles blog
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function()
{
    // Backpack\NewsManager routes
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('teacher', 'TeacherCrudController');
    CRUD::resource('cours', 'CourseCrudController');
});



