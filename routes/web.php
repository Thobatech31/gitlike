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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
    //MAINLY HELP TO REMOVE THE admin PREFIX i.e THE admin
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');


//Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
});




Route::middleware(['auth'])->group(function () {


    Route::resource('companies', 'CompaniesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('roles', 'RolesController');
    Route::resource('tasks', 'TasksController');
    Route::resource('users', 'UsersController');
    Route::resource('comments', 'CommentsController');
    Route::get('projects/create/{company_id?}', 'ProjectsController@create');
    Route::post('projects/adduser', 'ProjectsController@adduser')->name('projects.adduser');

    //The route for the uploading section
  //  Route::get('projects/show', 'UploadController@index');
    //Route::post('/store', 'UploadController@store');
    //Route::get('show', 'UploadController@show');

    Route::get('projects/show', 'FileController@uploadfile');
        Route::get('projects/displaycode/{filename}', 'ProjectsController@displaycode');
    
    //display user for the admin to delete route
    Route::get('adminfolder/deleteUser', 'AdminDisplayProjectController@index');
    Route::get('adminfolder/runProject', 'AdminDisplayProjectController@run');

    //Route::get('projects/show', 'FileController@index');
    Route::post('/store', 'FileController@storefile');

    Route::get('uploadedfile/{filename}', 'FileController@getFile')->name('get.file')->middleware('auth');

    Route::get('getContent/{filename}', 'FileController@getContent')->name('get.filecontent')->middleware('auth');


    
    
});


//fetch data from the database route
Route::get('/usertabledata', 'UserDatabaseController@getData')->name('usertabledata');
Route::get('usertabledata/fetchData', 'UserDatabaseController@fetchData')->name('usertabledata.fetchData');

Route::get('/projectDatabase', 'ProjectDatabaseController@getData')->name('projectDatabase');
Route::get('projectDatabase/fetchData', 'ProjectDatabaseController@fetchData')->name('projectDatabase.fetchData');

Route::get('/filetabledata', 'fileDatabaseController@getData')->name('filetabledata');
Route::get('filetabledata/fetchData', 'fileDatabaseController@fetchData')->name('filetabledata.fetchData');


