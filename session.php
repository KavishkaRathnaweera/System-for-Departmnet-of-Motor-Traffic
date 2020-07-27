<?php

ob_start();
session_start();
ob_end_clean();

if(!isset($_SESSION["userId"])){
    ob_start();
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
    ob_end_clean();
}

?>