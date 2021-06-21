<?php include_once "partials/header.php"; ?>

<?php
    if(isset($_SESSION['userid'])){
    echo "<div class='alert alert-success alert-dismissible fade show'>Welcome ".
    $_SESSION['useruid']
    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    } 
?>

<?php include_once "partials/footer.php"; ?>
    