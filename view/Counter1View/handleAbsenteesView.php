<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/handleAbsenteesView.inc.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Counter1"){
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
    <title>Counter 1</title>
    <link rel="stylesheet" type="text/css" href="../css/counter1.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<div class="navbar">

  <a href="../Counter1View.php">Verify Applicant Details</a>
 <!-- <a href='ExaminarView/ExamMarkView.php'>Mark Exam Marks</a>-->
  <a href=>Handle Absentees</a>

</div>   
<h1 class="head">Absentees</h1>

<main class="container_C1A"> 
    <br>
   
    <div class="search_box">
        <form id="Search" action="handleAbsenteesView.php#Search" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
        <?php if(isset($_SESSION["C1Hnic"])) echo $_SESSION["C1Herror"]?>
    </div>
    
    <div class="applicantDetails_box">
        <!-- <form action="handleAbsenteesView.php" method="post"> -->
            <h3>Applicant Details</h3>
            <label>ID: </label>
            <input type="text" name="NID" value="<?php if(isset($_SESSION["C1Hnic"])){echo $_SESSION["C1Hnic"];}?>" size="50" disabled ><br><br>
            <label>Full Name: </label>
            <input type="text" name="fullname" value="<?php if(isset($_SESSION["C1HfullName"])){echo $_SESSION["C1HfullName"];}?>"  size="50" disabled><br><br>
            
    <form action="handleAbsenteesView.php#wait" id="wait" class="wait" method="post">
        
    <fieldset>
            <legend><h3>Register Absentees</h3></legend>
            <label>Register Date: </label>
            <input type="text" name="registerDate" value="<?php if(isset($_SESSION["C1HregisterDate"])){echo $_SESSION["C1HregisterDate"];}?>"  size="50" disabled><br><br>
            <label>Verified: </label>
            <input type="text" name="verified" value="<?php if(isset($_SESSION["C1Hverified"])){echo $_SESSION["C1Hverified"];}?>"  size="50" disabled><br><br>
            <button type="submit" name="newRegDate" <?php echo isset($_SESSION["C1HregisterDate"]) && $_SESSION["C1HregisterDate"]< date('Y-m-d') && $_SESSION["C1Hverified"]=="No" ? '' : 'disabled="true"';?> >New Date</button>
             
    </fieldset>
   
    </form>

    <br>

    <form action="handleAbsenteesView.php#exam" id="exam" class="exam" method="post">
        
    <fieldset>
            <legend><h3>Exam Absentees</h3></legend>
            <label>Exam Date: </label>
            <input type="text" name="examDate" value="<?php if(isset($_SESSION["C1HexamDate"])){echo $_SESSION["C1HexamDate"];}?>"  size="50" disabled><br><br>
            <label>Exam: </label>
            <input type="text" name="exam" value="<?php if(isset($_SESSION["C1Hexam"])){echo $_SESSION["C1Hexam"];}?>"  size="50" disabled><br><br>
            <label>Exam Fail Count: </label>
            <input type="text" name="examCount" value="<?php if(isset($_SESSION["C1HexamFailCount"])){echo $_SESSION["C1HexamFailCount"];}?>"  size="50" disabled><br><br>
            <button type="submit" name="newExamDate" <?php echo isset($_SESSION["C1HexamDate"]) && $_SESSION["C1HexamDate"]< date('Y-m-d') && ($_SESSION["C1Hexam"]=="No" || ($_SESSION["C1Hexam"]=="Fail" && $_SESSION["C1HexamFailCount"]<3)) ? '' : 'disabled="true"';?> >New Date</button>
            <!-- when there is no exam date then wiil be returned "NO" then --$_SESSION["C1HexamDate"]< date('Y-m-d')-- this condition false. -->
    </fieldset>

    </form>
    <br>

    <form action="handleAbsenteesView.php#trial" id="trial" class="trial" method="post">
        
    <fieldset>
            <legend><h3>Trial Absentees</h3></legend>
            <label>Trial Date: </label>
            <input type="text" name="trialDate" value="<?php if(isset($_SESSION["C1HtrialDate"])){echo $_SESSION["C1HtrialDate"];}?>"  size="50" disabled><br><br>
            <label>Trial: </label>
            <input type="text" name="trial" value="<?php if(isset($_SESSION["C1Htrial"])){echo $_SESSION["C1Htrial"];}?>"  size="50" disabled><br><br>
            <label>Trial Fail Count: </label>
            <input type="text" name="trialCount" value="<?php if(isset($_SESSION["C1HtrialFailCount"])){echo $_SESSION["C1HtrialFailCount"];}?>"  size="50" disabled><br><br>
            <button type="submit" name="newTrialDate" <?php echo isset($_SESSION["C1HtrialDate"]) && $_SESSION["C1HtrialDate"]< date('Y-m-d') && ($_SESSION["C1Htrial"]=="No" || ($_SESSION["C1Htrial"]=="Fail" && $_SESSION["C1HtrialFailCount"]<4)) ? '' : 'disabled="true"';?> >New Date</button>
    </fieldset>

    </form>

</div>
</main>
    
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>
</html>