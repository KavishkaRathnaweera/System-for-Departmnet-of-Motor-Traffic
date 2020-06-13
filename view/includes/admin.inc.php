<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Admin.class.php');
session_start();

$admin = Admin::getInstance();
$checkdateW="";
$checkdateE="";
if(isset($_POST["limitbtn1"])){
    $setlmt = $_POST["limit1"];
    $_SESSION['todaylimit'] = $setlmt;
    $admin->changewaitLimit($setlmt);
}

if(isset($_POST["datebtn1"])){
    $setdt = $_POST["date1"];
    $_SESSION['inpdate'] = $setdt;
    if(isset($_SESSION['todaylimit'])){
        $admin->changewaitLimit($_SESSION['todaylimit']);
    }
    $checkdateW=$admin->addDate($setdt,$_SESSION['todaylimit']);
    
}


if(isset($_POST["limitbtn2"])){

    $setlmte = $_POST["limit2"];
    $_SESSION['todaylimitexam'] = $setlmte;
    $admin->changeexamLimit($setlmte);

}
if(isset($_POST["datebtn2"])){
    $setdte = $_POST["date2"];
    $_SESSION['inpdate1'] = $setdte;
    if(isset($_SESSION['todaylimitexam'])){
        $admin->changeexamLimit($_SESSION['todaylimitexam']);
    }
    $checkdateE=$admin->addDateExam($setdte,$_SESSION['todaylimitexam']);
    
}


?>