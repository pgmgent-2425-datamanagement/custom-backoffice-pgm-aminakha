<section class="container">
    <h1>Exercise Control</h1>
    
    <div class="methods-container">
        <form method="get" action="/exercises">
            <input type="text" name="search" placeholder="Search" value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
            <button type="submit">Search</button>
        </form>
        
        <form method="get" action="/exercises">
            <button class="btn btn--img-small" type="submit" name="order" value="asc">Order Ascending <img src="/assets/img/arrow-long-up.svg" alt="arrow up"></button>
            <button class="btn btn--img-small" type="submit" name="order" value="desc">Order Descending <img src="/assets/img/arrow-long-down.svg" alt="arrow down"></button>
            
        </form>

        <form class="filter-container" method="get" action="/exercises">
           
            <div class="action-content">
                <select name="filter" id="filter">
            <option value="">Select Difficulty</option>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
           
</select> 
<button class="btn btn--img-small" type="submit" ><img src="/assets/img/settings.svg" alt="Settings"></button>
            </div>
            
        </form>
    </div>
    
        <ul class="items-container" >
       
<?php
foreach($exercises as $exercise) {
    include "exercise/item.php";
}
?>


</ul>
<div  ><a class="btn btn--middle btn--action" href="/exercise/add">Add Exercise</a></div>
</section>


