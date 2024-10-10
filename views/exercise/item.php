<ul class="exercise-container" >

    <li class="exercise__item"> 

    <form action="">
   <input placeholder=<?=$exercise->name?> type='text' >
    <input placeholder=<?=$exercise->description?> type='text' >
    <a href="/exercise/edit/<?= $exercise->id ?>">Edit</a>

//inputs in edit page
    </form>
    </li>

</ul>