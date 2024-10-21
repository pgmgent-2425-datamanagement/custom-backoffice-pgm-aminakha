<?php

namespace App\Controllers;

use App\Models\Exercise;

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
        }
        self::loadView('edit-page', [
            'title' => 'Edit page',
            'foundExercise' => $exercise
        ]);
        

    } 

    public static function delete($id) {
        $exercise = Exercise::find($id);
        $exercise->delete();
        header('Location: /');
        }

    public static function getExercises() {
        $exercises = Exercise::all();
        header('Content-Type: application/json');
        echo json_encode($exercises);
        exit;

        //method bij api controller
    }
    public static function add() {
        self::loadView('/exercise/form', [
            'title' => 'Add page'
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
