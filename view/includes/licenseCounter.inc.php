<?php
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
    //check for search
    $_SESSION["lnic"]="";
    $_SESSION["lname"]="";
    $_SESSION["ltrial"]="";
    $_SESSION["laddrss"]="";
    $_SESSION["error"]="";

    $counterCtrl = CounterFactory::getCounter("LicenseCounter");
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		
        $details = $counterCtrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["lnic"]=$details["nic"];
            $_SESSION["lname"]=$details["fullname"];
            $_SESSION["laddrss"]=$details["addrss"];
            $_SESSION["ltrial"]=$details["trail"];
            $_SESSION["nic"]=$details["nic"];
        }
        else{
            $_SESSION["error"]=$details["error"];
        }
       
    }
    if (isset($_POST["issueLicense"])){
        $counterCtrl->issuedLicense($_SESSION["nic"]); 
    }
    if(isset($_POST["button1"])){
        unset($_SESSION['officeLog']);
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
    }
    

 ?>