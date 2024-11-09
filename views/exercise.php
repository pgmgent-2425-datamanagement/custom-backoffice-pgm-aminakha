<section class="container">
    <h1>Exercise Control</h1>
    
    <form method="get" action="/exercise">
            <input type="text" name="search" placeholder="Search" value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
            <button type="submit">Search</button>
        </form>
        
        <form method="get" action="/exercise">
            <button class="btn btn--img-small" type="submit" name="order" value="asc">Order Ascending <img src="/assets/img/arrow-long-up.svg" alt="arrow up"></button>
            <button class="btn btn--img-small" type="submit" name="order" value="desc">Order Descending <img src="/assets/img/arrow-long-down.svg" alt="arrow down"></button>
        </form>
        <ul class="items-container" >
       
<?php
foreach($exercises as $exercise) {
    include "exercise/item.php";
}
?>


</ul>
<div  ><a class="btn btn--middle btn--action" href="/exercise/add">Add Exercise</a></div>
</section>


