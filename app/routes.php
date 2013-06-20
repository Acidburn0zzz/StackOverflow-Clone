<?php

Route::resource('/', 'HomeController');

Route::resource('question', 'QuestionController');
Route::resource('questions', 'QuestionsController');
Route::resource('tag', 'TagController');
Route::resource('tags', 'TagsController');
Route::resource('user', 'UserController');
