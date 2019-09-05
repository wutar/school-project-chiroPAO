<?php
use Illuminate\Database\Eloquent\Model;
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

Route::get('/','IndexController@show');
Route::get('/news','NewsController@index');
Route::get('/news/{articleId}','NewsController@detail');
Route::get('/leaders','LeaderController@index');
Route::get('/leaders/{leaderId}','LeaderController@profile');
Route::get('/contact',function(){
    return view('contact',[]);
});

/**
 * Group routes
 */
Route::get('/groups/{groupId}', 'GroupController@profile');
Route::get('/groups','GroupController@index');
Route::get('/groups/{groupId}/edit', 'GroupController@edit')->middleware('auth');
Route::post('/groups/{groupId}/update', 'GroupController@update')->middleware('auth');

/**
 * Activity routes
 */
Route::get('/groups/{groupId}/activities','ActivityController@index');
Route::get('/groups/{groupId}/activities/{activityId}/detail','ActivityController@detail')->middleware('auth');
Route::get('/groups/{groupId}/activities/{activityId}/edit','ActivityController@edit')->middleware('auth');
Route::get('/groups/{groupId}/activities/new','ActivityController@new')->middleware('auth')->name('activity.new');
Route::post('/groups/{groupId}/activities/add','ActivityController@add')->middleware('auth');
Route::post('/groups/{groupId}/activities/{activityId}/update','ActivityController@update')->middleware('auth');
Route::post('/groups/{groupId}/activities/{activityId}/deletePhoto','ActivityController@deletePhoto')->middleware('auth');
Route::post('/groups/{groupId}/activities/{activityId}/addPhoto','ActivityController@addPhoto')->middleware('auth');

/**
 * Event routes
 */
Route::get('/events', 'EventController@index');
Route::get('/events/{eventId}/detail','EventController@detail');
Route::post('/events/{eventId}/subscribe','SubscriptionController@event')->middleware('auth');
Route::get('/events/{eventId}/edit', 'EventController@edit')->middleware('auth');
Route::post('/events/{eventId}/update', 'EventController@update')->middleware('auth');
Route::get('/events/{eventId}/subscriptions', 'EventController@subscriptions')->middleware('auth');

/**
 * Subscription routes
 */
Route::get('/kidslist', 'KidController@list')->middleware('auth');
Route::get('/subscribe','SubscriptionController@year')->middleware('auth');
Route::post('/newKid', 'SubscriptionController@newKid')->middleware('auth')->name('kid.create');
Route::post('/subscribe/new', 'SubscriptionController@subscribe')->middleware('auth')->name('subscribeKids');
Route::get('/subscribe/success', 'SubscriptionController@success')->middleware('auth')->name('subscribeSuccess');
Auth::routes();

