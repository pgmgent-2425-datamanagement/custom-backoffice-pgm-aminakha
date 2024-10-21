
<form method="POST">
    <label for=""><?php $foundExercise->name?></label>
    <input type="text" name="name" value="<?=$foundExercise->name?>">
    <label for=""><?php $foundExercise->description?></label>
    <input type="text" name="description" value="<?=$foundExercise->description?>">
    <label for=""><?php $foundExercise-> difficulty?></label>
    <input type="text" name="difficulty" value="<?=$foundExercise->difficulty?>">
    <label for=""><?php $foundExercise->type_id?></label>
    <input type="text" name="type_id" value="<?= $foundExercise->type_id?>">
    <label for=""><?php $foundExercise->image_url?></label>
    <input type="text" name="image_url" value="<?= $foundExercise->image_url?>">
    <button class="btn" type="submit">Change</button>

</form>

