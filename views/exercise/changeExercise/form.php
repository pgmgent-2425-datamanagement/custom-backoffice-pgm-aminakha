
<div class="container form-container">
    <h1>Edit Exercise</h1>
    <form method="POST">
    <label for="">Name</label>
    <input type="text" name="name" value="<?=$foundExercise->name?>">
    <label for="">Description</label>
    <textarea type="text" name="description" value="<?=$foundExercise->description?>"><?=$foundExercise->description?></textarea> 

    <label for="">Difficulty</label>
    <input type="text" name="difficulty" value="<?=$foundExercise->difficulty?>">

    <label for="">Type ID</label>
    <input  name="type_id" value="<?= $foundExercise->type_id?>">

    <label for="">Image URL</label>
    <input type="text" name="image_url" value="<?= $foundExercise->image_url?>">
    <button class="btn" type="submit">Change</button>

</form>
</div>
