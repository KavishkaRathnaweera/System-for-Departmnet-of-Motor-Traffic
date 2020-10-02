
<?php

//session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailMediator.class.php');

    //check for search
    $_SESSION["IdError"]="";
    $_SESSION["dateError"]="";
    $_SESSION["nic"]="";
    $_SESSION["fullname"]="";
    $_SESSION["validate"]="No";
    $examinarCtrl = CounterFactory::getCounter("Examinar");
	if (isset($_POST["search"])) {
        $_SESSION["validate"]="Yes";
		$id = $_POST["ID"];
		
        $details = $examinarCtrl->getData($id);
       // echo $details[0]['nic'];
        if(isset($details["noId"])){
            $_SESSION["IdError"]="Invalid ID or relavent ID not in Exam list ";
            
           
        }
        elseif(isset($details["noDate"])){
            $_SESSION["dateError"]=" Invalid Exam Date.Applicant exam date is ".$details["date"];
        }
        elseif(isset($details["nic"])){
            $_SESSION["nic"]=$details["nic"];
            $_SESSION["fullname"]=$details["fullname"];
            $_SESSION["id"]=$details["nic"];
        }
       
    }
    
    if (isset($_POST["mark"])){
        $examinarCtrl->markAttendance($_SESSION["id"]);
        $_SESSION["validate"]="yes";
    }
    if (isset($_POST["email"]) && $_SESSION["validate"]="No"){
        $_SESSION["validate"]="yes";
        $mail = EmailMediator::getInstance();
        $mail->SendEmailList("examApplicant");
    }
    if(isset($_POST["button1"])){
        unset($_SESSION['officeLog']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
    }

 ?>

