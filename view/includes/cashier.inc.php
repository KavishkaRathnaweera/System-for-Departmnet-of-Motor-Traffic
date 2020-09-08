<?php

//session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');
    //check for search
    $_SESSION["IdError"]="";
    $_SESSION["nic"]="";
    $_SESSION["fullname"]="";
    $_SESSION["verified"]="";
    $_SESSION["exam"]="";
    $_SESSION["examF"]="";
    $_SESSION["trial"]="";
    $_SESSION["trialF"]="";
    

    $cashierCtrl = CounterFactory::getCounter("Cashier");
    
    if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		
        $details = $cashierCtrl->getData($id);

        if(isset($details["noId"])){
            $_SESSION["IdError"]="Invalid ID";
            
           
        }
        elseif(isset($details["nic"])){
            $_SESSION["nic"]=$details["nic"];
            $_SESSION["fullname"]=$details["fullname"];
            $_SESSION["fullname1"]=$details["fullname"];
            $_SESSION["verified"]=$details["verified"];
            $_SESSION["exam"]=$details["exam"];
            $_SESSION["examF"]=$details["examF"];
            $_SESSION["trial"]=$details["trial"];
            $_SESSION["trialF"]=$details["trialF"];
            $_SESSION["id"]=$details["nic"];
            $_SESSION["email"]=$details["email"];
        }
       
    }
    
    if (isset($_POST["mark"])){
        $email = EmailSend::getInstance();
        if($_POST["ExamAndTrial"]=="examAdd"){
            $_SESSION["examDate"]=$cashierCtrl->getNewDate("newExamDate",$_SESSION["id"], $_SESSION["fullname1"]);
           
    $examDate= $_SESSION["examDate"];
    $body="Dear ".$_SESSION["fullname"].'..<br><br>'.'
    1)Applicant should be present in person.<br><br>
    2)Should bring the national identity card or the valid passport with the national identity card number.<br><br>
    3)You should come at 8.00 a.m. on following date<br><br>
    your Exam date: '.$examDate;
    $email->sendmail('Information for License applicant',$body,$_SESSION["email"]);
    echo $examDate;
        }
        else{
            $_SESSION["trialDate"]=$cashierCtrl->getNewDate("newTrialDate",$_SESSION["id"], $_SESSION["fullname1"]);
            $trialDate= $_SESSION["trialDate"];
    $body="Dear ".$_SESSION["fullname"].'..<br><br>'.'
    1)Applicant should be present in person.<br><br>
    2)Should bring the national identity card or the valid passport with the national identity card number.<br><br>
    3)You should come at 8.00 a.m. on following date<br><br>
    your Trial date: '.$trialDate;
    $email->sendmail('Information for License applicant',$body,$_SESSION["email"]);
    echo $trialDate;
        }
        
    }

 ?>