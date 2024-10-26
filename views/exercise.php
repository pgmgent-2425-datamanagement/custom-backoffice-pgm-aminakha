<section class="container">
    <h1>Exercise Control</h1>
    <ul class="items-container" >
<?php
foreach($exercises as $exercise) {
    include "exercise/item.php";
}
?>


</ul>
<div  ><a class="btn btn--middle btn--action" href="/exercise/add">Add Exercise</a></div>
</section>


