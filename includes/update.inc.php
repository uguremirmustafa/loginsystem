<?php

// kullanicinin dogrudan urlye bu dosyanin adresini girmediginden emin ol
if (isset($_POST['submit'])) {
    //kullanici bilgilerini POST super globalinden al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];  
    $usertype = $_POST['usertype'];
    $id = $_POST['usersId'];



    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputUpdate($name,$email,$username,$usertype) !== false){
        header("Location: ../signup.php?id=".$id."error=emptyinput");
        exit();
    } 
    if(invalidUid($username) !== false){
        header("Location: ../signup.php?id=".$id."error=invaliduid");
        exit();
    } 
    if(invalidEmail($email) !== false){
        header("Location: ../signup.php?id=".$id."error=invalidemail");
        exit();
    } 
    updateUser($conn,$name,$email,$username,$usertype,$id);
    
} else {
    header("Location: ../users.php");
    exit();
}