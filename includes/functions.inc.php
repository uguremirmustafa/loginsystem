<?php

function emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($username,$pwd) {
    $result;
    if (empty($username) || empty($pwd) ) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInputUpdate($name,$email,$username,$usertype) {
    $result;
    if (empty($username) || empty($name) || empty($usertype) || empty($email)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn,$username,$email) {
   $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
   }
   mysqli_stmt_bind_param($stmt, "ss", $username,$email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)) {
       return $row;
   } else {
       $result = false;
       return $result;
   }
   mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$username,$pwd,$usertype) {
   $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersUsertype) VALUES (?,?,?,?,?);";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
   }

   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $name,$email,$username,$hashedPwd,$usertype);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("Location: ../login.php?register=success");
   exit();
}

function updateUser($conn,$name,$email,$username,$usertype,$id) {
   $sql = "UPDATE users SET usersName='$name', usersEmail='$email', usersUid='$username', usersUsertype='$usertype' WHERE usersId='$id'";
   $edit = mysqli_query($conn,$sql);
   if($edit)
   {
       mysqli_close($conn); 
       header("Location: ../users.php"); 
       exit;
   }
   else 
   {
       echo mysqli_error($conn);
   } 
}

function deleteUser($conn,$id) {
   $sql = "DELETE FROM users WHERE usersId='$id'";
   $delete = mysqli_query($conn,$sql);
   if($delete)
   {
       mysqli_close($conn); 
       header("Location: users.php"); 
       exit;
   }
   else 
   {
       echo mysqli_error($conn);
   } 
}


function loginUser($conn,$username,$pwd){
    $uidExists = uidExists($conn,$username,$username);

    if ($uidExists === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists['usersPwd'];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if ($checkPwd === false) {
        header("Location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION['userid'] = $uidExists['usersId'];
        $_SESSION['useruid'] = $uidExists['usersUid'];
        $_SESSION['usertype'] = $uidExists['usersUsertype'];
        header("Location: ../index.php");
        exit();
    }
}

function getAllUsers($conn) {
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
       return $result;
    } else {
        return null;
    }
}

function getUserById($conn,$id) {
    $sql = "SELECT * FROM users WHERE usersId = ".$id.";";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);
    return $user;
}