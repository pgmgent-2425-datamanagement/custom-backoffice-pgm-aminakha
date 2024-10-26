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
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $uploadResult = self::handleFileUpload($_FILES['avatar']);
            if ($uploadResult['success']) {
                $user->avatar = $uploadResult['fileName'];
                $user->save();
                header("Location: /users");
                exit();
            } else {
                echo $uploadResult['message'];
            }
        }   
    }

    private static function handleFileUpload($file) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        if (!in_array($fileActualExt, $allowed)) {
            return ['success' => false, 'message' => 'You cannot upload files of this type'];
        }

        if ($fileError !== 0) {
            return ['success' => false, 'message' => 'There was an error uploading your file'];
        }

        if ($fileSize > 500000) {
            return ['success' => false, 'message' => 'Your file is too big'];
        }

        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = 'uploads/' . $fileNameNew;

        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            return ['success' => true, 'fileName' => $fileNameNew];
        } else {
            return ['success' => false, 'message' => 'Failed to move uploaded file'];
        }
    }
}
