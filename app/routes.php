<?php

Route::get('test', function(){
	
	
	echo $_SERVER['DB_NAME'];
	
	});

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


/*
|---------------------
| Home Controller
|---------------------
|
*/
Route::group(array('prefix'=>''),function(){
	
	//Login View
	Route::get('/', 'HomeController@loginView');
	
	//Signup View
	Route::get('/signup', 'HomeController@signupView');
	
	
	
});


/*
|---------------------
| Admin Controller
|---------------------
|
*/
Route::group(array('prefix'=>'/'),function(){
	
	//Login
	Route::post('login', 'AdminController@login');
	
	//SignUp
	Route::post('signup', 'AdminController@signup');
	
	//Save Notes
	Route::post('savenotes', 'AdminController@savenotes');
	
	//Update Notes View
	Route::get('/updatenotes/{id}', 'AdminController@updatenotesView');
	
	//Update Notes
	Route::post('/updatenotes', 'AdminController@updatenotes');
	
	//Delete Notes
	Route::get('/deletenotes', 'AdminController@deletenotes');
	
	//Profile Setting View
	Route::get('/profile/{id}', 'AdminController@profileView');
	
	//Profile Setting
	Route::post('/profile', 'AdminController@profile');
	
	//Invite Friends View
	Route::get('/invitefriends', 'AdminController@invitefriendsView');
	
	//Send Email To Invite Friends
	Route::post('/sendemailinvite','AdminController@sendemailinvite');
	
	//Page Link
	Route::post('/pagelink', 'AdminController@pagelink');
	
	//Contact Us Email  View For Contact Us Page
	Route::get('contactusemail', 'AdminController@contactusemailView');
	
	//Contact Us Email For Contact Us Page
	Route::post('contactusemail', 'AdminController@contactusemail');
	
	
});


/*
|---------------------
| Reminders Controller
|---------------------
|
*/
Route::group(array('prefix'=>'/'),function(){
	
	Route::get('index', 'AdminController@indexView');
	
	//Send Email For Forgot Password
	Route::post('/postRemind','RemindersController@postRemind');
	
	//View For getReset Page
	Route::get('/getReset/{token}','RemindersController@getReset');
	
	//Post Reset
	Route::post('/postReset','RemindersController@postReset');
	
});


/*
|-----------
| Logout
|-----------
|
*/
Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to('/');
});

