<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');

//API routes
$router->get("api/get_exercises", "ExerciseApiController@getExercises");
$router->get("api/get_exercises/(\d+)", "ExerciseApiController@getExercise");
$router->post("api/add_exercise", "ExerciseApiController@addExercise");

//Exercise routes
$router->get('/exercises', 'ExercisePageController@index');
//exercise editen
$router->get('exercise/edit/(\d+)','EditPageController@edit');
$router->post("exercise/edit/(\d+)", "ExerciseController@edit");
//Exercise adden
$router->get("exercise/add", "ExerciseController@add");
$router->post("exercise/add", "ExerciseController@add");
//Exercise verwijderen
$router->get("exercise/delete/(\d+)", "ExerciseController@delete");

//Users routes
$router->get("/users", "UserPageController@index");
//User adden
$router->get("user/add", "UserController@add");
$router->post("user/add", "UserController@add");

//User Delete
$router->get("user/delete/(\d+)", "UserController@delete");

//user editen 
$router->get('user/edit/(\d+)','UserController@edit');
$router->post("user/edit/(\d+)", "UserController@edit");

//Filemanager routes
$router->get("/filemanager", "FileManagerController@index");