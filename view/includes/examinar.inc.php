
<?php

session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
    //check for search
    $_SESSION["IdError"]="";
    $_SESSION["dateError"]="";
    $_SESSION["nic"]="";
    $_SESSION["fullname"]="";
   
    $examinarCtrl = new Examinar();
	if (isset($_POST["search"])) {
        
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
    }

 ?>
