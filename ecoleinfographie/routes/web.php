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

// WEB
Route::get('web/programme-des-cours', 'CourseController@indexWeb')->name('programWeb');
Route::get('web/parcours-de-nos-diplomes', 'StudentController@indexWeb')->name('parcoursWeb');
// Pages
Route::get('nos-diplomes', 'StudentController@indexGraduated')->name('nos-diplomes');
Route::get('realisations', 'WorkController@index')->name('realisations');
// Posts
Route::get('cours/{course}', 'CourseController@show');
Route::get('professeurs/{teacher}', 'TeacherController@show');
Route::get('etudiants/{student}', 'StudentController@show');

// Catch-all for Backpack/PageManager
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
     ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);

// MenuCrud
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
});



// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function()
{
    // Backpack\NewsManager routes
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('teacher', 'TeacherCrudController');
    CRUD::resource('cours', 'CourseCrudController');
    CRUD::resource('student', 'StudentCrudController');
    CRUD::resource('work', 'WorkCrudController');
    Route::post('media-dropzone', ['uses' => 'WorkCrudController@handleDropzoneUpload']);
});

