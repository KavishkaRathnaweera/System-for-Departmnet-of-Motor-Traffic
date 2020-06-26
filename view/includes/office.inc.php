<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Admin.class.php');
session_start();



$admin = Admin::getInstance();



if(isset($_POST["login"])){

    $userID = $_POST['id_no'];
    $password = $_POST['password'];
    
    $error = $admin->checkOfficer($userID,$password);
    
    
    
}

?>