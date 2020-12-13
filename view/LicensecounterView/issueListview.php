<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Licensecounter"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<?php

//session_start();
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>License Counter</title>
    <link rel="icon" href="../images/3.png">
    <link rel="stylesheet" href="../css/issueList.css?v=<?php echo time(); ?>">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" class="logout" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">LOGOUT</button>
    <div class="navbar">

<a href='../LicenseCounterView.php'>License Issuing</a>
<a href=>Issuing List</a>

</div>
<h1 class="head">License Table</h1>
<main class="container_LT">


<div class="tableQ">
<?php
    $counterCtrl2 = CounterFactory::getCounter("LicenseCounter");
    $counterCtrl2->showLicensetable();
?>
</div>
</main>   
    


<br>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>

</html>