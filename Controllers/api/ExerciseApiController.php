<?php
namespace App\Controllers;
use App\Models\Exercise;

class ExerciseApiController extends BaseController  {

    public static function getExercises() {
    
        
    $exercises = Exercise::all();
    header('Content-Type: application/json');
    echo json_encode($exercises);
    exit;

}

public static function getExercise($id) {
    $exercise = Exercise::find($id);
    header('Content-Type: application/json');
    echo json_encode($exercise);
    exit;
}
public static function addExercise() {
    $inputData = json_decode(file_get_contents('php://input'), true);
    //if error
    if (!$inputData) {
        header('Content-Type: application/json', true, 400);
        echo json_encode(['error' => 'Invalid JSON input']);
        exit;
    }

    $exercise = new Exercise();
    $exercise->name = $inputData['name'];
    $exercise->description = $inputData['description'];
    $exercise->difficulty = $inputData['difficulty'];
    $exercise->type_id = $inputData['type_id'];
    $exercise->image_url = $inputData['image_url'] ?? null;
    $exercise->save();
    header('Content-Type: application/json');
    echo json_encode($exercise);
    exit;
}
}
