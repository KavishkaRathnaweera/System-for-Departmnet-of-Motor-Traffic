<?php

session_start();
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/LicenseCounter.class.php');
    //check for search
    $_SESSION["lnic"]="";
    $_SESSION["lname"]="";
    $_SESSION["ltrial"]="";
    $_SESSION["error"]="";

    $counterCtrl = LicenseCounter::getInstance();
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		
        $details = $counterCtrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["lnic"]=$details["nic"];
            $_SESSION["lname"]=$details["fullname"];
            $_SESSION["ltrial"]=$details["trail"];
            $_SESSION["nic"]=$details["nic"];
        }
        else{
            $_SESSION["error"]=$details["error"];
        }
       
    }
    if (isset($_POST["issueLicense"])){
        $counterCtrl->updateUserAccount($_SESSION["nic"]); 
    }
    echo(date("Y-m-d"));

 ?>