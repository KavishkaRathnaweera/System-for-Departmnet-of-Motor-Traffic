<?php

//session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
    //check for search
    $_SESSION["tIdError"]="";
    $_SESSION["tdateError"]="";
    $_SESSION["tnic"]="";
    $_SESSION["tfullname"]="";
   
    $examinarCtrl = Examinar::getInstance();
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		
        $details = $examinarCtrl->getDataT($id);
       // echo $details[0]['nic'];
        if(isset($details["noId"])){
            $_SESSION["tIdError"]="Invalid ID or relavent ID not in Trial list ";
            
           
        }
        elseif(isset($details["noDate"])){
            $_SESSION["tdateError"]=" Invalid trial Date.Applicant trial date is ".$details["date"];
        }
        elseif(isset($details["nic"])){
            $_SESSION["tnic"]=$details["nic"];
            $_SESSION["tfullname"]=$details["fullname"];
            $_SESSION["tid"]=$details["nic"];
            $_SESSION["tfname"]=$details["fullname"];
        }
       
    }
    
    if (isset($_POST["mark"])){
        $examinarCtrl->addMarks($_SESSION["tid"],$_POST["mark1"],$_SESSION["tfname"]);
       // echo $_SESSION["tfname"];
    }

 ?>