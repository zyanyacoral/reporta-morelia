<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


// connect with corresponding model.
Route::model('user', 'User');
//route for index page, call index method of controller
Route::get('/', 'UsersController@index');
//route for create employee page.
Route::get('/create', 'UsersController@create');
//route for edit employee page.
Route::get('/edit/{user}', 'UsersController@edit');
//route for delete emplooyee page
Route::get('/delete/{user}', 'UsersController@delete');
// route for form submission call handleCreate method.
Route::post('/create', 'UsersController@handleCreate');
//route to handle edit form submission
Route::post('/edit', 'UsersController@handleEdit');
//route to handle delete.
Route::post('/delete', 'UsersController@handleDelete');
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));
