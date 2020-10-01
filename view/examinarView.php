<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/examinar.inc.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Examinar"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Attendance</title>
    <link rel="stylesheet" type="text/css" href="css/examinar.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/3.png">
    <script type="text/javascript" src="js/admin.js"></script>
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="logout" onclick="la('../index.php')">LOGOUT</button>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="navbar">

  <a href=>Mark Exam Attendance</a>
 <!-- <a href='ExaminarView/ExamMarkView.php'>Mark Exam Marks</a>-->
  <a href='ExaminarView/trialView.php'>Record Trial</a>
  <a href="ExaminarView/examPaperView.php">Make Exam Question</a>
  <a href="ExaminarView/questionSet.php">View Created Question</a>
  <a href="ExaminarView/updateQuestion.php">Update Questions</a>

</div>
<h1 class="head">Examinar-Attendance Sheet</h1>
<main class="container_EAS">
    <div class="search_box">
        <form id="Search" action="examinarView.php#Search" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
        <?php echo $_SESSION["IdError"]?>
    <?php echo $_SESSION["dateError"]?>
    </div>
    
    <div class="applicantDetails_box">
            
            <h2>Applicant Details</h2>
            <label>Applicant ID: </label>
            <input type="text" value="<?php echo $_SESSION["nic"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["fullname"]?>"  size="50" disabled><br><br>

        
            
    
    <form class="Mark" action="examinarView.php#Mark" method="post">
        <button id="examMA" type="submit" name="mark" <?php echo !isset($details["nic"]) ? 'disabled="true"' : '';?> >Mark Attendance</button>
    </form>
    </div>
</main>


<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>