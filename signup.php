<?php include_once "partials/header.php"; ?>

<?php include_once "partials/registerAlert.php"; ?>

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
    <input type="hidden" name='usertype' value='user'>
    <button type="submit" class="btn btn-primary" name='submit'>Sign Up</button>
</form>


<?php include_once "partials/footer.php"; ?>
    