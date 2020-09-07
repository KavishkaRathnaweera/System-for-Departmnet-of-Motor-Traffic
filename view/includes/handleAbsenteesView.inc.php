<?php

//session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Counter1.class.php');
    //check for search
   
    $counter1Ctrl = Counter1::getInstance(); 
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
        $details = $counter1Ctrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["C1Herror"]="";
            $_SESSION["C1Hnic"]=$details["nic"];
            $_SESSION["C1HfullName"]=$details["fullName"];
            $_SESSION["C1HregisterDate"]=$details["registerDate"];
            $_SESSION["C1Hverified"]=$details["verified"];
            $_SESSION["C1HexamDate"]=$details["examDate"];
            $_SESSION["C1Hexam"]=$details["exam"];
            $_SESSION["C1HtrialDate"]=$details["trialDate"];
            $_SESSION["C1Htrial"]=$details["trail"];
            $_SESSION["C1HexamFailCount"]=$details["examfail"];
            $_SESSION["C1HtrialFailCount"]=$details["trialfail"];
            $_SESSION["C1HisProcess"]="No";
        }
        else{
            $_SESSION["C1Herror"]=$details["error"];
            $_SESSION["C1Hnic"]="";
            $_SESSION["C1HfullName"]="";
            $_SESSION["C1HregisterDate"]="";
            $_SESSION["C1Hverified"]="";
            $_SESSION["C1HexamDate"]="";
            $_SESSION["C1Hexam"]="";
            $_SESSION["C1HtrialDate"]="";
            $_SESSION["C1Htrial"]="";
            $_SESSION["C1HexamFailCount"]="";
            $_SESSION["C1HtrialFailCount"]="";
            $_SESSION["C1HisProcess"]="";
        }

    }
    if (isset($_POST["newRegDate"]) && $_SESSION["C1HisProcess"]=="No") {//use $_SESSION["C1HisProcess"] variable to prevent adding data again to DB, when refreshing.
        $_SESSION["C1HregisterDate"]=$counter1Ctrl->getNewDate("newRegDate",$_SESSION["C1Hnic"], $_SESSION["C1HfullName"]);
        $_SESSION["C1HisProcess"]="Yes";
    }

    if (isset($_POST["newExamDate"]) && $_SESSION["C1HisProcess"]=="No") {
        $_SESSION["C1HexamDate"]=$counter1Ctrl->getNewDate("newExamDate",$_SESSION["C1Hnic"], $_SESSION["C1HfullName"]);
        $_SESSION["C1HisProcess"]="Yes";  
    }
    if (isset($_POST["newTrialDate"]) && $_SESSION["C1HisProcess"]=="No") {
        $_SESSION["C1HtrialDate"]=$counter1Ctrl->getNewDate("newTrialDate",$_SESSION["C1Hnic"], $_SESSION["C1HfullName"]);
        $_SESSION["C1HisProcess"]="Yes";  
    }
    ?>