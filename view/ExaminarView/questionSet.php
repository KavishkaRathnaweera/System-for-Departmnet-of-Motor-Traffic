
<?php

session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
   
    $examinarCtrl1 = Examinar::getInstance();
	

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
<button type="button" class="button1" onclick="la('../../index.php')">LOGOUT</button>
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

<form action="questionSet.php" id="questionDetails" class="questionSet" method="post">

<button type="submit" name="Qsearch" id="Qsearch_btn">Show Questions</button>

</form>
<div class="tableQ">
<?php
if (isset($_POST["Qsearch"])) {
    $examinarCtrl1->showQuestion();
}
?>
</div>
    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>