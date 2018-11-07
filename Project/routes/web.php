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
Route::get('/index', function(){
	return view('index');
});
Route::get('/raven','QuizController@GetQuizzes');
Route::get('admin/quiz/add', function(){
	return view('admin/quiz_add');
})->name('AddQuiz');
Route::post('admin/quiz/add','QuizController@Create');
Route::post('/raven/submit','QuizController@SubmitQuiz');