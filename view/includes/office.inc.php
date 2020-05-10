<?php

include("../control/Admin.class.php");
session_start();

$admin = new Admin();

if(isset($_POST["login"])){

    $userID = $_POST['id_no'];
    $password = $_POST['password'];
    
    $error = $admin->checkOfficer($userID,$password);
    
    
    
}

?>