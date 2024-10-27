
<div class="container form-container">
    <h1>Edit Exercise</h1>
    <form method="POST">
    <label for="">Name</label>
    <input type="text" name="name" value="<?=$foundExercise->name?>">
    <label for="">Description</label>
    <input type="text" name="description" value="<?=$foundExercise->description?>">
    <label for="">Difficulty</label>
    <textarea type="text" name="difficulty" value="<?=$foundExercise->difficulty?>"></textarea> 
    <label for="">Type ID</label>
    <input type="password" name="type_id" value="<?= $foundExercise->type_id?>">
    <label for="">Image URL</label>
    <input type="text" name="image_url" value="<?= $foundExercise->image_url?>">
    <button class="btn" type="submit">Change</button>

</form>
</div>
