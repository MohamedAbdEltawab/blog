<?php


/*
|
|----------------------------------------------------
| 	Web Routes	
|----------------------------------------------------
|
| Here is where you can register web routes for your application
|
*/

$router->get('', 'PagesController@index');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');


$router->post('login', 'AuthController@login');
$router->post('registeruser', 'AuthController@register');
$router->get('logout', 'AuthController@logout');


$router->get('posts', 'PostsController@index');
$router->get('posts/create', 'PostsController@create');
$router->post('posts/store', 'PostsController@store');


$router->get('posts/show/{id}', 'PostsController@show');
$router->post('posts/show/{id}', 'CommentsController@store');


$router->get('profile', 'ProfileController@show');
$router->post('profile', 'ProfileController@update');
