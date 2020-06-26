<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');
session_start();

$loggeduser = new UserAccount();
$_SESSION["fullname"]=$loggeduser->showUserDetails($_SESSION["userId"])[0]['fullName'];
$_SESSION["verified"]=$loggeduser->showUserDetails($_SESSION["userId"])[0]['verified'];
$_SESSION["exam"]=$loggeduser->showUserDetails($_SESSION["userId"])[0]['exam'];
$_SESSION["trail"]=$loggeduser->showUserDetails($_SESSION["userId"])[0]['trail']



?>