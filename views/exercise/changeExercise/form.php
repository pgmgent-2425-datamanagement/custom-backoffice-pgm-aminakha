
<div class="container form-container">
    <h1>Edit Exercise</h1>
    <form method="POST">
    <label for="">Name</label>
    <input type="text" name="name" value="<?=$foundExercise->name?>">
    <label for="">Description</label>
    <textarea type="text" name="description" value="<?=$foundExercise->description?>"><?=$foundExercise->description?></textarea> 

    <label for="">Difficulty</label>
    <input type="text" name="difficulty" value="<?=$foundExercise->difficulty?>">

    <label for="">Image URL</label>
    <input type="text" name="image_url" value="<?= $foundExercise->image_url?>">

    <label for="">Change the type for the exercise</label>
    <div class="dropdown-container">
        
        <p class="drop-btn" onclick="toggleDropdown()"><span>Select</span><img src="/assets/img/arrow-down.svg" alt="Arrow Down"></p>
        <div class="dropdown-content" id="dropdownContent">
              <ul>
    <?php foreach($types as $type ) {
        $checked = '';
        if($type->id === $foundExercise->type_id) {
            $checked = 'checked';

        }
        echo '<li><input type="radio" name="type_id" '. $checked. ' value="' . $type->id  .  '"> '. htmlspecialchars($type->type) ." " . htmlspecialchars($type->id).'</li>';
        
        
        }?>
    </ul>
        </div>
          
    </div>

   
    <button class="btn" type="submit">Change</button>

</form>
</div>

<script>
    const toggleDropdown = () => {
        const dropdownContent = document.getElementById('dropdownContent');
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    }
  
    document.addEventListener("click", (e) => {
        const dropdownContent = document.getElementById('dropdownContent');
        const dropdownButton = document.querySelector('.drop-btn');
        if (!dropdownContent.contains(e.target) && !dropdownButton.contains(e.target)) {
            dropdownContent.style.display = 'none';
        }
    })

</script>