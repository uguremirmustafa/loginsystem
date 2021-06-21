<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
        Fill in all the fields!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "wronglogin") {
        echo "<div class='alert alert-danger alert-dismissible fade show' >
        Incorrect password or username!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>

      </div>";
    }
    else if ($_GET["error"] == "none") {
        echo "<div class='alert alert-success alert-dismissible fade show'>
        Successfull!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    
}
if (isset($_GET["register"])) {
    if ($_GET["register"] == "success") {
        echo "<div class='alert alert-success alert-dismissible fade show'>
        Success
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
}

?>
