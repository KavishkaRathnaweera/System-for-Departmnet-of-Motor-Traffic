<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Examinar"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<?php

//session_start();
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
//session_start();


$examinarCtrl1 = CounterFactory::getCounter("Examinar");
if(isset($_POST["button1"])){
    unset($_SESSION['officeLog']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
}

	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Question Sheet</title>
    <link rel="stylesheet" type="text/css" href="../css/examinar.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<form action="questionSet.php" class="Logout"  method="post">
        <button type="submit" class="logout" name="button1" >LOGOUT</button>
</form>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="navbar">

  <a href='../examinarView.php'>Mark Exam Attendance</a>
 <!-- <a href='ExamMarkView.php'>Mark Exam Marks</a>-->
  <a href="trialView.php">Record Trial</a>
  <a href="examPaperView.php">Make Exam Question</a>
  <a href="#here">View Created Question</a>
  <a href="updateQuestion.php">Update Questions</a>

</div>

<h1 class="head">Examinar-Exam Question Database</h1>
<main class="container_EEQD">
<?php
if (!isset($_POST["Qsearch"])) {
    echo('<form action="questionSet.php#questionDetails" id="questionDetails" class="questionSet" method="post">

    <button type="submit" name="Qsearch" id="Qsearch_btn" >Show Questions</button>
    
    </form>');
}
?>

<div class="tableQ">
<?php
//show question in examinor view
if (isset($_POST["Qsearch"])) {
    $examinarCtrl1->showQuestion();
}
?>
</div>
</main>   


<br>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>