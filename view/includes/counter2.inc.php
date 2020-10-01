<?php

//session_start();
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
    //check for search
   
    
    
    ?>
    <?php
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		$counter2Ctrl = CounterFactory::getCounter("Counter2");
        $details = $counter2Ctrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["C2error"]="";
            $_SESSION["C2nic"]=$details["nic"];
            $_SESSION["C2fullname"]=$details["fullname"];
            $_SESSION["C2verified"]=$details["verified"];
        }
        else{
            $_SESSION["C2error"]=$details["error"];
            $_SESSION["C2nic"]="";
            $_SESSION["C2fullname"]="";
            $_SESSION["C2verified"]="";
        }
       
    }
    if(isset($_POST["button1"])){
        unset($_SESSION['officeLog']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
    }

 ?>