<?php

//session_start();
     include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');

    //add exam question 
    $examinarCtrl = CounterFactory::getCounter("Examinar");
	if (isset($_POST["submitQ"])) {
        
        //$id = $_POST["ID"];
        
		
        $details = $examinarCtrl->addQuestion($_POST["question"],$_POST["ans1"],$_POST["ans2"],$_POST["ans3"],$_POST["ans4"],$_POST["correct"]);
    }

 ?>