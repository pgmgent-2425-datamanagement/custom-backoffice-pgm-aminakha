<?php

use App\Models\Exercise;
?>


    <li class="exercise__item"> 
    <p class="exercise__title"><?=$exercise->name?></p>
    <p class="exercise__title"><?= $exercise->difficulty?></p>
    <p><img src="<?= $exercise->image_url?>" alt="Picture"></p>
    <p class="exercise__title"><?= $exercise->description?></p>
    <div class="btn-container">

    <a class="btn" href="/exercise/edit/<?= $exercise->id ?>">Edit</a>   
    <a class="btn" href="/exercise/delete/<?= $exercise->id?>">Delete</a>
    
    </div>
   
    </li>
