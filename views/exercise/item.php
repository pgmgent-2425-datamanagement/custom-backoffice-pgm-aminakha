<?php


?>


    <li class="item"> 
    <h3 class="item__title"><?=$exercise->name?> • <strong><?= $exercise->difficulty?></strong></h3>
    <figure><img src="<?= $exercise->image_url?>" alt="Picture"></figure>
    <p><?= substr($exercise->description, 0, 60)?>...</p>
    <div class="btn-container">

    <a class="btn btn--action" href="/exercise/edit/<?= $exercise->id ?>">Edit</a>   
    <a class="btn" href="/exercise/delete/<?= $exercise->id?>">Delete</a>
    
    </div>
   
    </li>
