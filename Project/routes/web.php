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
    return view('index');
})->name('raven.home');
//Route for admin
Route::middleware(['auth','check.permission:admin'])->group(function(){
	Route::prefix('admin/raven')->group(function(){
		Route::post('/quiz/add','QuizController@Create');
		Route::get('/quiz/add', function(){
			return view('admin/quiz_add');
		})->name('AddQuiz');
		Route::get('/result', 'ResultController@GetAllResult')
			->name('admin.result.index');
		Route::get('/result/player/{id}', 'ResultController@GetPlayerResult')
			->name('admin.result.player');
	});

});
//Route for player
Route::middleware(['auth','check.permission:player'])->group(function(){
	Route::prefix('raven')->group(function(){
		Route::get('player/result','PlayerController@GetResult')
			->name('player.result');
		Route::get('/','QuizController@GetQuizzes');
		Route::post('submit','QuizController@SubmitQuiz');
	});
});
//Route for login
Route::prefix('raven')->group(function(){
	Route::get('login', function(){
		return view('login');
	});
	Route::post('login', 'Auth\LoginController@loginApp')->name('raven.login');
});
//Route for logout
Route::middleware(['auth'])->group(function(){
	Route::get('raven/logout', function(){
		Auth::logout();
	    Request::session()->flush();
	    return redirect()->route('raven.home');
	});
});
//
/*Route::get('/raven','QuizController@GetQuizzes')
	->middleware('auth','check.permission:player');
Route::get('admin/quiz/add', function(){
	return view('admin/quiz_add');
})->name('AddQuiz');
Route::post('admin/quiz/add','QuizController@Create');
Route::post('/raven/submit','QuizController@SubmitQuiz');
Route::get('test','QuizController@Test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/raven/login', function(){
	return view('login');
});
Route::post('/raven/login', 'Auth\LoginController@loginApp')->name('raven.login');
Route::get('/raven/logout', function(){
	Auth::logout();
    Request::session()->flush();
    return redirect()->route('raven.home');
});
Route::get('/raven/player/result','PlayerController@GetResult')
	->name('player.result')
	->middleware('auth','check.permission:player');
Route::get('/admin/raven/result', 'ResultController@GetAllResult')
	->name('admin.result.index')
	->middleware('auth','check.permission:admin');
Route::get('/admin/raven/result/player/{id}', 'ResultController@GetPlayerResult')
	->name('admin.result.player')
	->middleware('auth','check.permission:admin');*/
