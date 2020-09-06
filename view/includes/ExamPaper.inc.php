<?php
if(session_id() == ''){
    session_start();
}
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/ExamPaper.class.php');
$examppr = new ExamPaper();

if(isset($_POST["check"])){
    $passState=array();
    $_SESSION['examdone']=true;
    $pass_state=$examppr->ispassed($examppr->correctAnswerCount($_SESSION['rand']));
    if($pass_state){
        $passState[]="You have Passed the online exam!";
        $examppr->UpdateExamResult('Yes',$_SESSION['userid']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/ExamPaper.php');
    }else{
        $passState[]="You have Failed the online exam!";
        $examppr->UpdateExamResult('No',$_SESSION['userid']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/ExamPaper.php');
    }
}

if(isset($_POST["button1"])){
    unset($_SESSION['userid']);
    unset($_SESSION['rand']);
    unset($_SESSION['examdone']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
}

?>

