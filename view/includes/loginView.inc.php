<?php

include("../control/UserAccount.class.php");
session_start();

$adm = new UserAccount();

if(isset($_SESSION['userId'])) {
	header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginSuccessView.php');	
}

if(isset($_POST["login"])){

    $userID = $_POST['id_no'];
    $password = $_POST['password'];
    $errorArray=$adm->checkUser($userID,$password);
    if (empty($errorArray)){
        $_SESSION['userId'] = $userID;
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginSuccessView.php');
    }

    
    
    
}

?>