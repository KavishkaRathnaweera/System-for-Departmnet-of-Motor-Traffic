<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Admin.class.php');
session_start();

<<<<<<< HEAD
<<<<<<< HEAD
$admin = Admin::getIns();
=======
$admin = Admin::getInstance();
>>>>>>> 2baa2f14581d41e294d9be10633a14a13113341a
=======
$admin = Admin::getInstance();
>>>>>>> 2baa2f14581d41e294d9be10633a14a13113341a

if(isset($_POST["login"])){

    $userID = $_POST['id_no'];
    $password = $_POST['password'];
    
    $error = $admin->checkOfficer($userID,$password);
    
    
    
}

?>