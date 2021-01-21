<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/dashboard', 'DashboardController@index')->name('Dashboard');
Route::get('/', 'CourseController@index');
Route::get('/courses', 'CourseController@index')->name('list_courses');

Route::group(['prefix' => 'courses'], function () {

    Route::get('/show/{id}', 'CourseController@show')
        ->name('show_course');
    Route::get('/create', 'CourseController@create')
        ->name('create_course')
        ->middleware('can:create-course');
    Route::post('/create', 'CourseController@store')
        ->name('store_course')
        ->middleware('can:create-course');
    Route::get('/edit/{course}', 'CourseController@edit')
        ->name('edit_course')
        ->middleware('can:update-course,course');
    Route::post('/edit/{course}', 'CourseController@update')
        ->name('update_course')
        ->middleware('can:update-course,course');
    // using get to simplify
    Route::get('/delete/{course}', 'CourseController@delete')
        ->name('delete_course')
        ->middleware('can:delete-course');

        // Route::prefix('courses')->group(function(){
        //     Route::get('/', 'CourseController@index')->name('admin.courses.index');
        //     Route::get('/create', 'CourseController@create')->name('admin.courses.create');
        //     Route::post('/', 'CourseController@store')->name('admin.courses.store');

        //     Route::prefix('{course}')->group(function(){
        //         Route::get('/', 'CourseController@show')->name('admin.courses.show');
        //          Route::get('/edit', 'CourseController@edit')->name('admin.courses.edit');
        //         Route::patch('/', 'CourseController@update')->name('admin.courses.update');
        //         Route::get('/delete', 'CourseController@delete')->name('admin.courses.delete');
        //         Route::delete('/', 'CourseController@destory')->name('admin.courses.destroy');

        //     });

        // });

});
