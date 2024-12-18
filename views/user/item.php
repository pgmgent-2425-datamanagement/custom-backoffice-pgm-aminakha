<?php
$avatarPath = !empty($user->avatar) ? $user->avatar : 'path/to/default-avatar.jpg';

?>

<li class="item"> 
    <h3 class="item__title"><?=$user->id?> • <strong><?= $user->email?></strong></h3>
    <figure>
    <img src="/uploads/<?= htmlspecialchars($avatarPath) ?>" alt="User Avatar">    
</figure>
    <p><?=$user->first_name?> <?=$user->last_name?></p>
    <p><?=$user->gender?></p>
    <div class="btn-container">

    <a class="btn btn--action" href="/user/edit/<?= $user->id ?>">Edit</a>   
    <a class="btn" href="/user/delete/<?= $user->id?>">Delete</a>
    
    </div>
   
    </li>