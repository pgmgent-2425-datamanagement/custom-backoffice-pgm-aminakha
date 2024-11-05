<?php
namespace App\Models;

use App\Models\BaseModel;

class Exercise extends BaseModel{
public function update() {
    $sql = "UPDATE exercises SET name = :name, description = :description, difficulty = :difficulty,image_url = :image_url, type_id = :type_id WHERE id = :id";
    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':name' => $this->name,
        ':description' => $this->description,
        ':difficulty' => $this->difficulty,
        ':type_id' => $this->type_id,
        ':image_url' => $this->image_url,
        ':id' => $this->id 
    ]);

}

public function delete() {
    $sql = "DELETE FROM exercises WHERE id = :id";
    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':id' => $this->id
    ]);
    
}
public function save() {
    $sql = "INSERT INTO exercises (name, description, difficulty, type_id,image_url) VALUES (:name, :description, :difficulty, :type_id ,:image_url)";
    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':name' => $this->name,
        ':description' => $this->description,
        ':difficulty' => $this->difficulty,
        ':type_id' => $this->type_id,
        ':image_url' => $this->image_url
    ]);
    $this->id = $this->db->lastInsertId();
}

protected function where($column, $operator, $value) {
    $sql = "SELECT * FROM exercises WHERE $column $operator :value";
    $pdo_statement = $this->db->prepare($sql);
    $pdo_statement->execute([
        ':value' => $value
    ]);
    return self::castToModel($pdo_statement->fetchAll());

}
}