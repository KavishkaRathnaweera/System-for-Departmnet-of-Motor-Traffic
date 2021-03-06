<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
//session_start();


$admin = CounterFactory::getCounter("Admin");

$checkdateW="";
$checkdateE="";
$checkdateT="";
//If add waitlist limit button presses, call changewaitlimit function in admin class
if(isset($_POST["limitbtn1"])){
    $setlmt = $_POST["limit1"];
    $_SESSION['todaylimit'] = $setlmt;
    $admin->changewaitLimit($setlmt);
}
//If add waitlist day button presses, call addDate function in admin class
if(isset($_POST["datebtn1"])){
    $setdt = $_POST["date1"];
    $_SESSION['inpdate'] = $setdt;
    if(isset($_SESSION['todaylimit'])){
        $admin->changewaitLimit($_SESSION['todaylimit']);
        $checkdateW=$admin->addDate($setdt,$_SESSION['todaylimit']);
    }
    else{
        $today=$admin->getlimitwait1();
        $checkdateW=$admin->addDate($setdt, $today);
    }
    
    
}

//If add examlist limit button presses, call changeexamlimit function in admin class add new dates to exam limit list
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
        $checkdateE=$admin->addDateExam($setdte,$_SESSION['todaylimitexam']);
    }
    else{
        $today1=$admin->getlimitexam1();
        $checkdateW=$admin->addDateExam($setdte, $today1);
    }
   
    
}
// add new dates to trail limit list
//change triali limit function
if(isset($_POST["limitbtn3"])){

    $setlmtt = $_POST["limit3"];
    $_SESSION['todaylimitTrial'] = $setlmtt;
    $admin->changetrialLimit($setlmtt);

}
//add trial data function
if(isset($_POST["datebtn3"])){
    $setdtt = $_POST["date3"];
    $_SESSION['inpdate2'] = $setdtt;
    if(isset($_SESSION['todaylimitTrial'])){
        $admin->changetrialLimit($_SESSION['todaylimitTrial']);
        $checkdateT=$admin->addDateTrial($setdtt,$_SESSION['todaylimitTrial']);
    }
    else{
        $today2=$admin->getlimittrial1();
        $checkdateT=$admin->addDateTrial($setdtt, $today2);
    }
   
    
}
//Logout function
if(isset($_POST["button1"])){
    unset($_SESSION['officeLog']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
}



?>