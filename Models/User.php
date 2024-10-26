<?php
namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel{
public function save() {
    $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (first_name, last_name, email, password, avatar) VALUES (:first_name, :last_name, :email, :password, :avatar)";
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
        ":first_name" => $this->first_name,
        ":last_name" => $this->last_name,
        ":email" => $this->email,
        ":password" => $hashedPassword, 
        ":avatar" => $this->avatar
    ]);
}
}