
<h1>Basic Training</h1>
<p>Welcome to this base mvc project.</p>

<ul class="exercise-container">
<?php 
foreach($exercises as $exercise) {
    echo "<li><p class='exercise__item'>" . $exercise->name ."</p> </li>" . '';
}
?>

</ul>
