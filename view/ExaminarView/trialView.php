<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/trialView.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Trial Record</title>
    <link rel="stylesheet" type="text/css" href="../css/examinar.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
    <script type="text/javascript" src="js/admin.js"></script>
  
 
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
  <a href="#services">Record Trial</a>
  <a href="examPaperView.php">Make Exam Question</a>
  <a href="questionSet.php">View Created Question</a>
  <a href="updateQuestion.php">Update Questions</a>

</div>
<h1 class="head">Examinar-Trail Record</h1>

    <div class="search_box">
        <form action="trialView.php" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
    </div>
    <h3 ><?php echo $_SESSION["tIdError"]?></h3>
    <h3 ><?php echo $_SESSION["tdateError"]?></h3>
    <div class="applicantDetails_box">
            
            <h2>Applicant Details</h2>
            <label>Applicant ID----: </label>
            <input type="text" value="<?php echo $_SESSION["tnic"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["tfullname"]?>"  size="50" disabled><br><br>
        
            
    </div>
    <br>
    <form action="trialView.php" method="post">
        <label for=""> Add Trial result :</label>
        <input type="text" name="mark1" placeholder="Enter person results">
        <button type="submit" name="mark" <?php echo !isset($details["nic"]) ? 'disabled="true"' : '';?> >Add</button>
    </form>




<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>