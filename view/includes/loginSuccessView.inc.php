<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/ExamPaper.class.php');
session_start();

$loggeduser = new ExamPaper();
$_SESSION["fullname"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['fullName'];
$_SESSION["verified"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['verified'];
$_SESSION["exam"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['exam'];
$_SESSION["trail"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['trail'];


if(isset($_POST["renewLicense"])){
    
}

if(isset($_POST["button1"])){
    unset($_SESSION['userid']);
    unset($_SESSION['rand']);
    //unset($_SESSION['examdone']);
    unset($_SESSION['passState']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
}


?>