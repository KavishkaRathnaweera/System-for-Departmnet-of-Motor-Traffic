<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php 
if($_SESSION["officeLog"]!="#Examinar"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<?php
//session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
    //check for search
    $_SESSION["QuesNotFoundError"]="";
    $_SESSION["qstn"]="";
    $_SESSION["answer1"]="";
    $_SESSION["answer2"]="";
    $_SESSION["answer3"]="";
    $_SESSION["answer4"]="";
    //$_SESSION["idnum"]="qq";
    $_SESSION["notype"]="";
    $examinarCtrl2 = Examinar::getInstance();
	if (isset($_POST["searchQ"])) {
        
		$id = $_POST["qnum"];
		$_SESSION["idnum"]=$_POST["qnum"];
        $details = $examinarCtrl2->findQuestion($id);
       // echo $details[0]['nic'];
        if(isset($details["noQsn"])){
            $_SESSION["QuesNotFoundError"]="Invalid Question Number";
            
           
        }
        elseif(isset($details[0]["question"])){
            $_SESSION["qstn"]=$details[0]["question"];
            $_SESSION["answer1"]=$details[0]["answere1"];
            $_SESSION["answer2"]=$details[0]["answere2"];
            $_SESSION["answer3"]=$details[0]["answere3"];
            $_SESSION["answer4"]=$details[0]["answere4"];
        }
       
    }
    
    if (isset($_POST["submitUpdtQ"])){
        if(isset( $_SESSION["idnum"])){
        $examinarCtrl2->updateQs($_POST["questionUp"],$_POST["ans1"],$_POST["ans2"],$_POST["ans3"],$_POST["ans4"],$_POST["correct"],$_SESSION["idnum"]);
        //echo($_SESSION["idnum"]);
        $_SESSION["idnum"]="";
        //echo($_POST["questionUp"]);
        
        }
        else{
            $_SESSION["notype"]="Please search question from id";
        }
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Update Questions</title>
    <link rel="stylesheet" type="text/css" href="../css/examinar.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
    <script type="text/javascript" src="js/admin.js"></script>
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="logout" onclick="la('../../index.php')">LOGOUT</button>
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
  <a href="#here">Update Questions</a>

</div>
<h1 class="head">Examinar-Update Exam Questions</h1>
<main class="container_EUEQ">
    <div class="search_box">
        <form id="Search" action="updateQuestion.php#Search" method="post">
            <lable>Search Question by Question number: </lable>
            <input type="text" name="qnum" id="q_no" size="50" class="searchUpdate">
            <button type="submit" name="searchQ" id="search_btnQ">search</button>
        </form>
        <?php echo $_SESSION["QuesNotFoundError"]?>
    </div>
   
    <div class="qdetails_box">        
    <form action="updateQuestion.php#qupdateForm" id="qupdateForm" class="updtqn" method="post">
        <p>
            <label for="">Question : </label>
            <input type="text" name="questionUp" value="<?php echo $_SESSION["qstn"]?>" placeholder="" required>
        </p>
        <p>
            <label for="">Answer 1</label>
            <input type="text" name="ans1" id="a" value="<?php echo $_SESSION["answer1"]?>" placeholder="" required>
        </p>
        <p>
            <label for="">Answer 2 </label>
            <input type="text" name="ans2" value="<?php echo $_SESSION["answer2"]?>" placeholder="" required>
        </p>
        <p>
            <label for="">Answer 3 : </label>
            <input type="text" name="ans3" value="<?php echo $_SESSION["answer3"]?>" placeholder="" required>
        </p>
        <p>
            <label for="">Answer 4 : </label>
            <input type="text" name="ans4" value="<?php echo $_SESSION["answer4"]?>" placeholder="" required>
        </p>
        <p>
            <br>
            <label for="">Select Answer: </label>
            <select  name="correct">
                <option value="A1">Answer 1</option>
                <option value="A2">Answer 2</option>
                <option value="A3">Answer 3</option>
                <option value="A4">Answer 4</option>
            </select>
        </p>
        <p>
            <button type="submit" name="submitUpdtQ" id="idUp" >Update Question </button>   
        </p>
    

           </form>       
    </div>
    <h3 ><?php echo $_SESSION["notype"]?></h3>

</main>


<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>