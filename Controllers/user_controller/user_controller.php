<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends BaseController {
    public static function add() {
        self::loadView('user/addUser/form', [
            'title' => 'Add page'
        ]);
        if(isset($_POST['first_name'])) {
            $user = new User();
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];

            $fileName = $_FILES["avatar"]["name"];
            $fileTmpName = $_FILES["avatar"]["tmp_name"];
            $fileSize= $_FILES["avatar"]["size"];
            $fileError = $_FILES["avatar"]["error"];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($fileActualExt,$allowed))  {
                if($fileError === 0) {
                    if($fileSize < 500000) {
                        $fileNameNew = $fileTmpName.".".$fileActualExt;
                        $fileDesination = 'uploads/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDesination);
                       print_r("File uploaded");
                        header("Location: /users");
                    } else {
                        echo "Your file is too big!";
                    }
                }
            } else {
                echo "You cannot upload files of this type";
            }
            $user->avatar = $_POST['avatar'];

            $user->save();
           
        }   
    }
}
