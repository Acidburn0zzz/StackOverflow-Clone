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
    return User::with(array('posts.comments.user'))->find(1);
});

Route::get('test', function()
{
    DB::table('VoteTypes')->insert(
        array('id' => 1, 'Name' => "TestName")
    );
});