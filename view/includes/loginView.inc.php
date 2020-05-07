<?php

include("../model/CreateAccountDB.php");
session_start();

if(isset($_SESSION['userId'])) {
	header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginSuccessView.php');	
}

if(isset($_POST["login"])){

    $userID = $_POST['id_no'];
    $password = $_POST['password'];
    
    $errors = array();

    if(empty($userID) || empty($password)){
        if($userID == ""){
            $errors[] = "userID is required";
        }

        if($password == "") {
			$errors[] = "Password is required";
		}
    }else{
        $obj=new CreateAccountDB();
        $result = $obj->selectUserByusername($_POST["id_no"]);
        

        if(!empty($result)) {
			if($password==$result[0]['passwrd']){
                $_SESSION['userId'] = $userID;
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginSuccessView.php');
            }else{
                $errors[] = "Password is incorrect!";
            }
		} else {		
			$errors[] = "UserID doesnot exists";
		}
    }
    if(isset($errors[0])){
        print($errors[0]);
    }
    
}

?>