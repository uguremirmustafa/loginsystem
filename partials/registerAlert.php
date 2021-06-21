<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
        Fill in all the fields!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<div class='alert alert-danger alert-dismissible fade show' >
        Please use only lowercase, uppercase and number for the username!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "invalidemail") {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
        Please enter a proper email!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
        Your passwords does not match!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
        Something went wrong, try again!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    else if ($_GET["error"] == "none") {
        echo "<div class='alert alert-success alert-dismissible fade show'>
        You have signed up
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    
}

?>
