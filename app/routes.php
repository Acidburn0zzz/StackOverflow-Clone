<?php

Route::resource('/', 'HomeController');

Route::resource('answer', 'AnswerController');
Route::resource('question', 'QuestionController');
Route::resource('questions', 'QuestionsController');
Route::resource('tag', 'TagController');
Route::resource('tags', 'TagsController');
Route::resource('user', 'UserController');

Route::get('test', function()
{
    $posts = Post::where('post_type_id', '=', 1)->paginate(10);

    return $posts->links();
});
