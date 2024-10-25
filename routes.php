<?php

//$router->get('/', function() { echo 'Dit is de index vanuit de route'; });
$router->setNamespace('\App\Controllers');
$router->get('/', 'HomeController@index');
$router->get("/api/get_exercises", "ExerciseController@getExercises");

//Exercise routes
$router->get('/exercise', 'ExercisePageController@index');
$router->get('exercise/edit/(\d+)','EditPageController@edit');
$router->post("exercise/edit/(\d+)", "ExerciseController@edit");


$router->get("exercise/add", "ExerciseController@add");
$router->post("exercise/add", "ExerciseController@add");

$router->get("exercise/delete/(\d+)", "ExerciseController@delete");

//Users routes
$router->get("/user", "UserControlle");