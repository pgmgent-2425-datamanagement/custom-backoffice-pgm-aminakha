<div class="container">
    <h1>Users</h1>
    <ul class="items-container">
         <?php
foreach($users as $user) {
    include "user/item.php";
}
?>
    </ul>
    <div  ><a class="btn btn--middle btn--action" href="/exercise/add">Add User</a></div>

</div>