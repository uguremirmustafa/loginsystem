<?php include_once "partials/header.php"; ?>

<h2 class='mb-4'>Create A New User</h2>

<form action='includes/signup.inc.php' method='post' class='signup-form'>
    <div class="mb-3">
        <label class="form-label">Full name</label>
        <input type="text" class="form-control" name='name' placeholder=''>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name='email'>
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name='uid'>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name='pwd'>
    </div>
    <div class="mb-3">
        <label class="form-label">Repeat Password</label>
        <input type="password" class="form-control" name='pwdrepeat'>
    </div>
    <div class="mb-3">
        <label class="form-label">User Type</label>
        <select name="usertype" id="usertype" class="form-select">
            <option value="admin">Admin</option>
            <option value="user">Regular user</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary" name='submit'>Create user</button>
</form>

<?php include_once "partials/footer.php"; ?>
    