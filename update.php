<?php 

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$id = $_GET['id'];
$user = getUserById($conn,$id);

$usertypes = array(
    'admin' => 'admin',
    'user' => 'user'
);
?>

<?php include_once "partials/header.php"; ?>

<h2 class='mb-4'>Update the User</h2>

<form action='includes/update.inc.php' method='post' class='signup-form'>
    <div class="mb-3">
        <label class="form-label">Full name</label>
        <input type="text" class="form-control" name='name' value="<?php echo $user['usersName'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name='email' value="<?php echo $user['usersEmail'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name='uid' value="<?php echo $user['usersUid'] ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">User Type</label>
        <select name="usertype" id="usertype" class="form-select">
            <?php foreach( $usertypes as $var => $usertype ): ?>
                <option value="<?php echo $var ?>" <?php if( $var == $user['usersUsertype'] ): ?> selected="selected"<?php endif; ?>>
                    <?php echo $usertype ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <input type="hidden" name='usersId' value="<?php echo $user['usersId'] ?>">
    <button type="submit" class="btn btn-primary" name='submit'>Update user</button>
</form>

<?php include_once "partials/footer.php"; ?>
    