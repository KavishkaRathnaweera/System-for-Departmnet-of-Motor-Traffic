<?php

//session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Counter1.class.php');
    //check for search
   
    $counter1Ctrl = Counter1::getInstance(); 
	if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
        $details = $counter1Ctrl->show_userDetails($id);
        
        if(!isset($details["error"])){
            $_SESSION["C1error"]="";
            $_SESSION["C1nic"]=$details["nic"];
            $_SESSION["C1surname"]=$details["surname"];
            $_SESSION["C1fullName"]=$details["fullName"];
            $_SESSION["C1gender"]=$details["gender"];
            $_SESSION["C1birthday"]=$details["birthday"];
            $_SESSION["C1age"]=$details["age"];
            $_SESSION["C1height"]=$details["height"];
            $_SESSION["C1bloodGroup"]=$details["bloodGroup"];
            $_SESSION["C1vehicle"]=$details["vehicle"];
            $_SESSION["C1addrss"]=$details["addrss"];
            $_SESSION["C1phone"]=$details["phone"];
            $_SESSION["C1email"]=$details["email"];
            $_SESSION["C1verified"]=$details["verified"];
        }
        else{
            $_SESSION["C1error"]=$details["error"];
            $_SESSION["C1nic"]="";
            $_SESSION["C1surname"]="";
            $_SESSION["C1fullName"]="";
            $_SESSION["C1gender"]="";
            $_SESSION["C1birthday"]="";
            $_SESSION["C1age"]="";
            $_SESSION["C1height"]="";
            $_SESSION["C1bloodGroup"]="";
            $_SESSION["C1vehicle"]="";
            $_SESSION["C1addrss"]="";
            $_SESSION["C1phone"]="";
            $_SESSION["C1email"]="";
            $_SESSION["C1verified"]="";
        }

    }
    if (isset($_POST["verify"])){
        isset($_POST["NID"]) ? $_SESSION["C1nic"]=$_POST["NID"] : '';
        isset($_POST["surname"]) ? $_SESSION["C1surname"]=$_POST["surname"]: '';
        isset($_POST["fullname"]) ? $_SESSION["C1fullName"]=$_POST["fullname"]: '';
        isset($_POST["gender"]) ? $_SESSION["C1gender"]=$_POST["gender"]: '';
        isset($_POST["birthday"]) ? $_SESSION["C1birthday"]=$_POST["birthday"]: '';
        isset($_POST["age"]) ? $_SESSION["C1age"]=$_POST["age"]: '';
        isset($_POST["height"]) ? $_SESSION["C1height"]=$_POST["height"]: '';
        isset($_POST["bloodGroup"]) ? $_SESSION["C1bloodGroup"]=$_POST["bloodGroup"]: '';
        isset($_POST["vehicle"]) ? $_SESSION["C1vehicle"]=$_POST["vehicle"]: '';
        isset($_POST["address"]) ? $_SESSION["C1addrss"]=$_POST["address"]: '';
        isset($_POST["phone"]) ? $_SESSION["C1phone"]=$_POST["phone"]: '';
        isset($_POST["email"]) ? $_SESSION["C1email"]=$_POST["email"]: '';
        $_SESSION["C1verified"]="Yes";
        $counter1Ctrl->verify($_SESSION["C1nic"], $_SESSION["C1surname"],$_SESSION["C1fullName"],$_SESSION["C1gender"],$_SESSION["C1birthday"],$_SESSION["C1age"],$_SESSION["C1height"],$_SESSION["C1bloodGroup"],$_SESSION["C1vehicle"],$_SESSION["C1addrss"],$_SESSION["C1phone"],$_SESSION["C1email"],$_SESSION["C1verified"]);
    }
    if (isset($_POST["notVerify"])){
        $_SESSION["C1verified"]="No";
        $counter1Ctrl->verify($_SESSION["C1nic"], $_SESSION["C1surname"],$_SESSION["C1fullName"],$_SESSION["C1gender"],$_SESSION["C1birthday"],$_SESSION["C1age"],$_SESSION["C1height"],$_SESSION["C1bloodGroup"],$_SESSION["C1vehicle"],$_SESSION["C1addrss"],$_SESSION["C1phone"],$_SESSION["C1email"],$_SESSION["C1verified"]);
    }

 ?>