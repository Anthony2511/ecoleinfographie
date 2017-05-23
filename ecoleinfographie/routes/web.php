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
Route::get('realisations/filter', 'WorkController@filter')->name('realisations-filter');
Route::get(trans('url.teachers'), 'TeacherController@index')->name('teachers');
Route::get(trans('url.internship'), 'InternshipController@index')->name('internship');
Route::get(trans('url.registration'), 'PageController@registration')->name('registration');
Route::get(trans('url.contact'), 'ContactController@index')->name('contact');

// Blog
Route::get('blog', 'ArticleController@index')->name('blog');
Route::get('blog/search/autocomplete', 'ArticleController@autocomplete')->name('blog-autocomplete');
Route::post('comments/{article_id}', ['uses' => 'CommentController@store', 'as' => 'comment.store']);


// Posts
Route::get('cours/{course}', 'CourseController@show');
Route::get(trans('url.teachers') . '/{teacher}', 'TeacherController@show');
Route::get('etudiants/{student}', 'StudentController@show');
Route::get('realisations/{work}', 'WorkController@show');
Route::get('blog/{article}', 'ArticleController@show')->name('article.single');

/*// Catch-all for Backpack/PageManager
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
     ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);*/

// MenuCrud
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
    // Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');
});

// Mails
Route::post('/send-internship-full', 'InternshipController@sendFull')->name('mail-internship-full');
Route::post('/send-internship-file', 'InternshipController@sendFile')->name('mail-internship-file');
Route::post('/send-contact-form', 'ContactController@contactForm')->name('mail-contact-form');


// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function()
{
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('author', 'AuthorCrudController');
    CRUD::resource('teacher', 'TeacherCrudController');
    CRUD::resource('cours', 'CourseCrudController');
    CRUD::resource('student', 'StudentCrudController');
    CRUD::resource('work', 'WorkCrudController');
    Route::post('media-dropzone', ['uses' => 'WorkCrudController@handleDropzoneUpload']);
    CRUD::resource('skill', 'SkillCrudController');
    CRUD::resource('type', 'TypeCrudController');
    CRUD::resource('comment', 'CommentCrudController');
});

