
<div class="container form-container">
    <h1>Add exercise</h1>

    <form method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    
    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea> 
    
    <label for="difficulty">Difficulty</label>
    <input type="text" name="difficulty" id="difficulty">
    
    <label for="">Change the type for the exercise</label>
    <div class="dropdown-container">
        
        <p class="drop-btn" onclick="toggleDropdown()"><span>Select</span><img src="/assets/img/arrow-down.svg" alt="Arrow Down"></p>
        <div class="dropdown-content" id="dropdownContent">
              <ul>
    <?php foreach($types as $type ) {
        
        echo '<li><input type="radio" name="type_id"  value="' . $type->id  .  '"> '. htmlspecialchars($type->type) ." " . htmlspecialchars($type->id).'</li>';
        
        
        }?>
    </ul>
        </div>
    
    <label for="image_url">Img</label>
    <input type="text" name="image_url" id="image_url">
    
    <button class="btn" type="submit">Add</button>
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