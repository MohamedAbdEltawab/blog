<?php
use App\Core\Router;

/*
|
|----------------------------------------------------
| 	Web Routes	
|----------------------------------------------------
|
| Here is where you can register web routes for your application
|
*/

Router::get('', 'PagesController@index');
Router::get('login', 'PagesController@login');
Router::get('register', 'PagesController@register');


Router::post('login', 'AuthController@login');
Router::post('registeruser', 'AuthController@register');
Router::get('logout', 'AuthController@logout');


Router::get('posts', 'PostsController@index');
Router::get('posts/create', 'PostsController@create');
Router::post('posts/store', 'PostsController@store');


Router::get('posts/show/{id}', 'PostsController@show');
Router::post('posts/show/{id}', 'CommentsController@store');


Router::get('profile', 'ProfileController@show');
Router::post('profile', 'ProfileController@update');
