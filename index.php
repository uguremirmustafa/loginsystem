<?php include_once "partials/header.php"; ?>

<?php
    if(isset($_SESSION['userid'])){
    echo "<div class='alert alert-success text-center'>Welcome ".
    $_SESSION['useruid']
    ."
    </div>";
    } 
?>

<?php include_once "partials/footer.php"; ?>
    