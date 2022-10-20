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
	if(Auth::user())
		return redirect('/home');
	else
	    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* Routes managing outside API responses */
Route::group(['prefix' => 'responses'], function(){
	Route::get('intouch_sms', 'ResponseController@intouchSmsResponse');
});
/* Routes managing outside API responses */

/* Routes managing the search module */
Route::post('search', 'SearchController@index');
/* Routes managing the search module */

/* Routes managing the suggestions module */
Route::group(['prefix' => 'suggestions'], function(){
	Route::get('', 'SuggestionController@index')->middleware('auth');
	Route::get('suggest/{cell}', 'SuggestionController@create');
	Route::post('store', 'SuggestionController@store')->middleware('auth');
	Route::get('destroy/{id}', 'SuggestionController@destroy')->middleware('auth');
});
/* Routes managing the suggestions module */

/* Routes managing the services module */
Route::group(['prefix' => 'services'], function(){
	Route::get('', 'ServiceController@index');
	Route::get('create', 'ServiceController@create')->middleware('auth');
	Route::post('store', 'ServiceController@store')->middleware('auth');
	Route::get('{cell}', 'ServiceController@show');
	Route::get('destroy/{id}', 'ServiceController@destroy')->middleware('auth');
});
/* Routes managing the services module */

/* Routes managing the search module */	
Route::get('/topics/cell/{id}', 'TopicController@cellTopics');

/*
* Routes that require Authentication
*/
Route::group(['middleware' => 'auth'], function () {
	
	/* Routes managing the topics module */
	Route::group(['prefix' => 'topics'], function(){
		Route::get('', 'TopicController@index');
		Route::get('create', 'TopicController@create');
		Route::post('store', 'TopicController@store');
		Route::get('destroy/{id}', 'TopicController@destroy');
	});
	/* Routes managing the topics module */
	
	/* Routes managing the comments module */
	Route::group(['prefix' => 'comments'], function(){
		Route::get('{topic}', 'CommentController@index');
		Route::get('{topic}/create', 'CommentController@create');
		Route::post('store', 'CommentController@store');
		Route::get('destroy/{id}', 'CommentController@destroy');
	});
	/* Routes managing the comments module */

	/* Routes managing the topic conclusions module */
	Route::group(['prefix' => 'conclusions'], function(){
		Route::get('{topic}', 'ConclusionController@index');
		Route::get('{topic}/create', 'ConclusionController@create');
		Route::post('store', 'ConclusionController@store');
		Route::get('destroy/{id}', 'ConclusionController@destroy');
	});
	/* Routes managing the topic conclusion module */

	/* Routes managing the action plans module */
	Route::group(['prefix' => 'action_plans'], function(){
		Route::get('', 'ActionPlanController@index');
		Route::get('create', 'ActionPlanController@create');
		Route::post('store', 'ActionPlanController@store');
		Route::get('destroy/{id}', 'ActionPlanController@destroy');
	});
	/* Routes managing the action plans module */

	/* Routes managing the users module */
	Route::group(['prefix' => 'users'], function(){
		Route::get('', 'UserController@index');
		Route::get('{id}/details', 'UserController@show');
		Route::get('edit/{id}', 'UserController@edit');
		Route::post('update', 'UserController@update');
		Route::get('destroy/{id}', 'UserController@destroy');
	});
	/* Routes managing the users module */
});
