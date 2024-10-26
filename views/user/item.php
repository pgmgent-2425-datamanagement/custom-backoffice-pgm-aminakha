<li class="item"> 
    <h3 class="item__title"><?=$user->id?> • <strong><?= $user->email?></strong></h3>
    <figure><img src="<?= $user->avatar?>" alt="Picture"></figure>
    <p><?=$user->first_name?> <?=$user->last_name?></p>
    <p><?=$user->email?> <?=$user->password?>  </p>
    <div class="btn-container">

    <a class="btn btn--action" href="/exercise/edit/<?= $user->id ?>">Edit</a>   
    <a class="btn" href="/exercise/delete/<?= $user->id?>">Delete</a>
    
    </div>
   
    </li>