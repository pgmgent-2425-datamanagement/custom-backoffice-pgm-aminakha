<?php

namespace App\Controllers;



class FileManagerController extends BaseController {

    public static function index () {
    $uploadDir = __DIR__ . '/../public/uploads/';
    $images = glob($uploadDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $imgUrls = [];
    foreach ($images as $image) {
        $filename = basename($image);
        $imgUrls[] ='/uploads/'. $filename;
    }

  
    self::loadView('/filemanager', [
        'title' => 'Filemanager',
        'images' => $imgUrls
        
    ]);
    
    }

}