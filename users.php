<?php include_once "partials/header.php"; ?>

<?php
    if(isset($_SESSION['userid']) and $_SESSION['usertype'] == 'admin'){
        include_once 'partials/adminUsersTable.php';
    } else {
        include_once 'partials/regularUsersTable.php';

    }
?>

<?php include_once "partials/footer.php"; ?>
    