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

    public static function delete($id) {
        $user = User::find($id);
        $user->delete();
        header("Location: /users");
        exit();
    }
    public static function edit($id) {
        $user = User::find($id);    
        if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'])) {
            $user = User::find($id);
        
            if (!$user) {
                echo "User not found.";
                exit();
            }
        
            // Validate and sanitize inputs, ensuring no undefined indexes are accessed
            $user->first_name = htmlspecialchars($_POST['first_name'] ?? '');
            $user->last_name = htmlspecialchars($_POST['last_name'] ?? '');
            $user->email = htmlspecialchars($_POST['email'] ?? '');
            $user->password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
        
            // Check if 'avatar' key exists in $_FILES and has been uploaded
            if (isset($_FILES['avatar']) && is_array($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
                $uploadResult = self::handleFileUpload($_FILES['avatar']);
        
                if ($uploadResult['success']) {
                    $user->avatar = $uploadResult['fileName'];
                    print_r($user);
                    $user->edit();

                } else {
                    echo "Failed to upload file: " . $uploadResult['message'];
                    exit();
                }
            }
        
            // Save user data
            if ($user->edit()) {
                header("Location: /users");
                exit();
            } 
        }
        
        // Load the edit view with user data and title, only if no form was submitted or saving failed
        self::loadView('user/changeUser/edit-page-user', [
            'title' => 'Edit page',
            'user' => User::find($id),
        ]);
    }
}

