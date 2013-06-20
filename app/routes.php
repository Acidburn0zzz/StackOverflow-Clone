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

Route::resource('/', 'HomeController');

Route::resource('question', 'QuestionController');
Route::resource('questions', 'QuestionsController');
Route::resource('tag', 'TagController');
Route::resource('tags', 'TagsController');
Route::resource('user', 'UserController');

Route::get('/', function()
{
    $data = array(
        'questions' => Post::all(),
        'tags'      => Tag::all()
    );

    return View::make('public.questions.index', $data);
});

Route::get('test', function()
{
    DB::table('VoteTypes')->insert(
        array('id' => 1, 'Name' => "TestName")
    );
});