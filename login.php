<?php include_once "partials/header.php"; ?>
<?php include_once "partials/loginAlert.php"; ?>

<form action='includes/login.inc.php' method='post' class='login-form'>
    <div class="mb-3">
        <label class="form-label">Username/Email</label>
        <input type="text" class="form-control" name='uid'>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name='pwd'>
    </div>
    <button type="submit" class="btn btn-primary" name='submit'>Login</button>
</form>

<?php include_once "partials/footer.php"; ?>
    