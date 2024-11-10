
    
<div class="container form-container" >
    <h1>Edit user</h1>
    <form method="POST" enctype="multipart/form-data">
    <label for="">First name</label>
    <input type="text" name="first_name" value="<?=$user->first_name?>">

    <label for="">Last name</label>
    <input type="text" name="last_name" value="<?=$user->last_name?>">

    <label for="">Email</label>
    <input type="text" name="email" value="<?=$user->email?>">

    <label for="">Password</label>
    <input type="password" name="password" id="password">

    <label for="">Avatar</label>
    <div class="img-upload-container">
            <input class="input--upload" type="file" name="avatar" id="avatar" accept="image/*">
    </div>
    <label for="">Gender</label>
    <select name="gender" id="gender" >
        <option  value="">Select Gender</option>
        <option type="radio" name="male" value="male">Male</option>
        <option type="radio" name="female" value="female">Female</option>
    </select>
    
    <button class="btn" type="submit">Change</button>

</form>
</div>

