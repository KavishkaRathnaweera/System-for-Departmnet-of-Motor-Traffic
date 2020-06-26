<?php

session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/counter2.class.php');
    //check for search
   
    
    
    ?>
    <?php
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		$counter2Ctrl = Counter2::getInstance();
        $details = $counter2Ctrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["error"]="";
            $_SESSION["nic"]=$details["nic"];
            $_SESSION["fullname"]=$details["fullname"];
            $_SESSION["verified"]=$details["verified"];
        }
        else{
            $_SESSION["error"]=$details["error"];
            $_SESSION["nic"]="";
            $_SESSION["fullname"]="";
            $_SESSION["verified"]="";
        }
       
	}

 ?>