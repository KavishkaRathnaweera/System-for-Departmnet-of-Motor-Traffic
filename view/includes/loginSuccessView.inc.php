<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/ExamPaper.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');
session_start();

$loggeduser = new ExamPaper();
$userAccount = new UserAccount();
$_SESSION["fullname"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['fullName'];
$_SESSION["verified"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['verified'];
$_SESSION["exam"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['exam'];
$_SESSION["trail"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['trail'];
$_SESSION["email"]=$loggeduser->showUserDetails($_SESSION["userid"])[0]['email'];



if (isset($_POST["renewLicense"])){
    $regDate=$userAccount->clickedRenewlicense($_SESSION["userid"], $_SESSION["fullname"]);
    $emailRenewLicense = EmailSend::getInstance();
    $bodyRenewLicense="Dear ".$_SESSION["fullname"].'..<br><br>'.'
    1)Applicant should be present in person.<br><br>
    
    2)Should bring the national identity card or the valid passport with the national identity card number.<br><br>

    3)In obtaining the service from offices where online method is available producing photographs is not required and the relevant 
    photographs are taken during the computer process. For offices where offline method is used two passport size  black and white 
    photographs with white background are required.<br><br>

    4)If you have old license. please bring it with you.<br><br>
    your registration date: '.$regDate;
    $emailRenewLicense->sendmail('Information for License applicant',$bodyRenewLicense,$_SESSION["email"]);
}
if(isset($_POST["button1"])){
    unset($_SESSION['userid']);
    unset($_SESSION['rand']);
    unset($_SESSION['examdone']);
    unset($_SESSION['passState']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
}


?>