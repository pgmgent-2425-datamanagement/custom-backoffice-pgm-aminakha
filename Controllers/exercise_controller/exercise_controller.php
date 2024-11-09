<?php

namespace App\Controllers;

use App\Models\Exercise;
use App\Models\Exercise_type;
class ExerciseController extends BaseController {

    
    public static function edit($id) {
        
        $exercise = Exercise::find($id);
     
       
        if(isset($_POST['name'])) {
            $exercise->name = $_POST['name'];
        $exercise->description = $_POST['description'];
        $exercise->difficulty = $_POST['difficulty'];
        $exercise->type_id = $_POST['type_id'];
        $exercise->image_url = $_POST['image_url'];
        $exercise->update();
        header('Location: /exercise');
        exit;
        }
        self::loadView('edit-page', [
            'title' => 'Edit page',
            'foundExercise' => $exercise,
            
        ]);
        

    } 

    public static function delete($id) {
        $exercise = Exercise::find($id);
        $exercise->delete();
        header('Location: /exercise');
        }

    public static function getExercises() {
        $exercises = Exercise::all();
        header('Content-Type: application/json');
        echo json_encode($exercises);
        exit;

        //method bij api controller
    }
    public static function add() {
        $types = Exercise_type::all();
        self::loadView('/exercise/addExercise/form', [
            'title' => 'Add page',
            'types' => $types

        ]);
        if(isset($_POST['name'])) {
            $exercise = new Exercise();
            $exercise->name = $_POST['name'];
            $exercise->description = $_POST['description'];
            $exercise->difficulty = $_POST['difficulty'];
            $exercise->type_id = $_POST['type_id'];
            $exercise->image_url = $_POST['image_url'];
            $exercise->save();
        }
       
    }

}
