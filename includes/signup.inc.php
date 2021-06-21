<?php

// kullanicinin dogrudan urlye bu dosyanin adresini girmediginden emin ol
if (isset($_POST['submit'])) {
    //kullanici bilgilerini POST super globalinden al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $usertype = $_POST['usertype'];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header("Location: ../signup.php?error=emptyinput");
        exit();
    } 
    if(invalidUid($username) !== false){
        header("Location: ../signup.php?error=invaliduid");
        exit();
    } 
    if(invalidEmail($email) !== false){
        header("Location: ../signup.php?error=invalidemail");
        exit();
    } 
    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("Location: ../signup.php?error=passwordsdontmatch");
        exit();
    } 
    if(uidExists($conn,$username,$email) !== false){
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }
    createUser($conn,$name,$email,$username,$pwd,$usertype);
    
} else {
    header("Location: ../signup.php");
    exit();
}