<?php
if(session_id() == ''){
    session_start();
}
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/ExamPaper.class.php');
$examppr = new ExamPaper();

if(isset($_POST["check"])){
    $_SESSION['examdone']=true;
    $pass_state=$examppr->ispassed($examppr->correctAnswerCount($_SESSION['rand']));
    if($pass_state){
        $_SESSION['passState']="You have Passed the online exam!";
        $examppr->UpdateExamResult('Yes',$_SESSION['userid']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/ExamPaper.php');
    }else{
        $_SESSION['passState']="You have Failed the online exam!";
        $examppr->UpdateExamResult('No',$_SESSION['userid']);
        $examppr->addtoFailList($_SESSION['userid']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/ExamPaper.php');
    }
}

if(isset($_POST["button1"])){
    unset($_SESSION['userid']);
    unset($_SESSION['rand']);
    unset($_SESSION['examdone']);
    unset($_SESSION['passState']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
}

?>

