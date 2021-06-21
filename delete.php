<?php

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$id = $_POST['id'];
$delete = deleteUser($conn,$id);

