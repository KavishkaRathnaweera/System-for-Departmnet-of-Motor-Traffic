<?php

include("../control/Admin.class.php");

$admin = new Admin();

if(isset($_POST["limitbtn1"])){

    $setlmtw = $_POST["limit1"];
    $admin->changewaitLimit($setlmtw);
   

}
if(isset($_POST["limitbtn2"])){

    $setlmte = $_POST["limit2"];
    $admin->changeexamLimit($setlmte);

}


?>