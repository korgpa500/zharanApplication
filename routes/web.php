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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//for suggestion
Route::post('/suggestions' ,'SuggestionController@store');// guest send suggestion

//about page
Route::get('/about' ,'PagesController@aboutView');


//routes for admin only
Route::group(['middleware' => ['checkAdmin']], function () {
    //types
    Route::get('/types', 'TypeController@index')->name('types.index');//show all types
    Route::post('/types', 'TypeController@store')->name('types.store');//save new type
    Route::get('/types/{type_id}', 'TypeController@show')->name('types.show');//show one type in same page
    Route::post('/types/{type_id}/edit', 'TypeController@edit')->name('types.edit');//edit one type
    Route::get('/types/{type_id}/delete', 'TypeController@destroy')->name('types.destroy');//delete one type

//sections
    Route::get('/sections', 'SectionController@index')->name('sections.index');//show all sections
    Route::post('/sections', 'SectionController@store')->name('sections.store');//save new section
    Route::get('/sections/{section_id}', 'SectionController@show')->name('sections.show');//show one section in same page
    Route::post('/sections/{section_id}/edit', 'SectionController@edit')->name('sections.edit');//edit one section
    Route::get('/sections/{section_id}/delete', 'SectionController@destroy')->name('sections.destroy');//delete one section

    //users
    Route::get('/users', 'UserController@index')->name('users.index');
});



