
<h1>Basic Training</h1>
<p>Welcome to this base mvc project.</p>

<ul class="exercise-container" >
<?php
foreach($exercises as $exercise) {
    include "exercise/item.php";
}
?>


</ul>

<a class="btn" href="/exercise/add">Add Exercise</a>