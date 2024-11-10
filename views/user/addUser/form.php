
<div class="container form-container">
    <h1>Add User</h1>

    <form method="POST" enctype="multipart/form-data">
    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" required>
    
    <label for="last_name">Last name</label>
    <input name="last_name" id="last_name" required>

    

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    
    <label for="avatar">Img</label>
    <input type="file" name="avatar" id="avatar" accept="image/*">

  
    <label for="gender">Gender</label>
    <select name="gender" id="gender" required>
        <option  value="">Select Gender</option>
        <option type="radio" name="male" value="male">Male</option>
        <option type="radio" name="female" value="female">Female</option>
    </select>
    
    <button class="btn" type="submit">Add user</button>
</form>

</div>