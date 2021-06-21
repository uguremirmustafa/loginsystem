<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Login System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
          if(isset($_SESSION['userid'])){
            if($_SESSION['usertype'] == 'admin') {
              echo "<li class='nav-item'>
              <a class='nav-link' href='create.php'>Create User</a>
            </li>";
            }
            echo "<li class='nav-item'>
            <a class='nav-link' href='users.php'>Users</a>
            </li>";
            echo "<li class='nav-item'><a class='nav-link' href='#'>"
            .ucfirst($_SESSION['useruid']).
            "</a></li>";
            echo "<li class='nav-item'>
            <a class='nav-link btn btn-danger btn-sm text-white mx-2' href='includes/logout.inc.php'>Logout</a>
            </li>";
          } 
          else {
            echo "<li class='nav-item'>
              <a class='nav-link' href='signup.php'>Sign up</a>
            </li>";
            echo "<li class='nav-item'>
              <a class='nav-link' href='login.php'>Login</a>
            </li>";
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
<main class='main'>