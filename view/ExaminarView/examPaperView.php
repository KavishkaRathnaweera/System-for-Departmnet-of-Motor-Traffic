<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/examPaperView.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Create Paper</title>
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
  <a href="trialView.php">Record Trial</a>
  <a href="#here">Make Exam Question</a>
  <a href="questionSet.php">View Created Question</a>
  <a href="updateQuestion.php">Update Questions</a>

</div>

<h1 class="head">Examinar-Add Question</h1>

<form action="examPaperView.php" id="userDetails" class="question" method="post">
        <p>
            <label for="">Question : </label>
            <input type="text" name="question" placeholder="" required>
        </p>
        <p>
            <label for="">Answere 1</label>
            <input type="text" name="ans1" id="a" placeholder="" required>
        </p>
        <p>
            <label for="">Answere 2 </label>
            <input type="text" name="ans2" placeholder="" required>
        </p>
        <p>
            <label for="">Answere 3 : </label>
            <input type="text" name="ans3" placeholder="" required>
        </p>
        <p>
            <label for="">Answere 4 : </label>
            <input type="text" name="ans4" placeholder="" required>
        </p>
        <p>
            <label for="">Select Answere: </label>
            <select  name="correct">
                <option value="A1">Answere 1</option>
                <option value="A2">Answere 2</option>
                <option value="A3">Answere 3</option>
                <option value="A4">Answere 4</option>
            </select>
        </p>
        <p>
            <br>
            <br>
            <button type="submit" name="submitQ" id="id1" >Add Question </button>   
        </p>
    

           </form>
    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>