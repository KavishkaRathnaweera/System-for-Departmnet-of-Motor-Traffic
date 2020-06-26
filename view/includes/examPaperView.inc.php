<?php

session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
    //check for search
    // $_SESSION["tIdError"]="";
    // $_SESSION["tdateError"]="";
    // $_SESSION["tnic"]="";
    // $_SESSION["tfullname"]="";
   
    $examinarCtrl = Examinar::getInstance();
	if (isset($_POST["submitQ"])) {
        
        //$id = $_POST["ID"];
        
		
        $details = $examinarCtrl->addQuestion($_POST["question"],$_POST["ans1"],$_POST["ans2"],$_POST["ans3"],$_POST["ans4"],$_POST["correct"]);
    }

 ?>