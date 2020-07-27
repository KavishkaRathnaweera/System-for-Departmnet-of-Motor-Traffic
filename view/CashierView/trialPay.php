<?php

session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Cashier.class.php');
    //check for search
    $_SESSION["IdError1"]="";
    $_SESSION["FailError1"]="";
    $_SESSION["nic1"]="";
    $_SESSION["fullname1"]="";
    $_SESSION["count1"]="";
    $_SESSION["exam1"]="";


    $cashierCtrl = Cashier::getInstance();
    
    if (isset($_POST["search1"])) {
        
		$id = $_POST["ID1"];
		
        $details = $cashierCtrl->getTrialData($id);

        if(isset($details["noId"])){
            $_SESSION["IdError1"]="Invalid ID";
        }
        elseif(isset($details["noFail"])){
            $_SESSION["FailError1"]="Relevant Applicant not in Fail List";
        }

        elseif(isset($details["nic"])){
            $_SESSION["nic1"]=$details["nic"];
            $_SESSION["fullname1"]=$details["fullname"];
            $_SESSION["count1"]=$details["count"];
            $_SESSION["exam1"]=$details["exam"];
            $_SESSION["id1"]=$details["nic"];
        }
       
    }
    
    if (isset($_POST["mark1"])){
        $cashierCtrl->markAttendance($_SESSION["id1"]);
    }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>pay</title>
    <link rel="stylesheet" type="text/css" href="../css/cashier.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="button1" onclick="la('../index.php')">LOGOUT</button>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="navbar">

  <a href='../cashierView.php'>Make Payment</a>
  <a href="examPay.php">Add Exam List</a>
  <a href=>Add Trial List</a>

</div>

<h1 class="head">Trial Re-Apply</h1>

    <div class="search_box">
        <form action="trialPay.php#idd" id="idd" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID1" id="ID_no">
            <button type="submit" name="search1" id="search_btn">search</button>
        </form>
    </div>
    <h4 ><?php echo $_SESSION["IdError1"]?></h4>
    <h4 ><?php echo $_SESSION["FailError1"]?></h4>
    
    <div class="applicantDetails_box">
            <h2>Applicant Details</h2>
            <label>Applicant ID----: </label>
            <input type="text" value="<?php echo $_SESSION["nic1"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["fullname1"]?>"  size="50" disabled><br><br>
            <label>Fail Count: </label>
            <input type="text" value="<?php echo $_SESSION["count1"]?>"  size="50" disabled><br><br>
            <label>Exam status: </label>
            <input type="text" value="<?php echo $_SESSION["exam1"]?>"  size="50" disabled><br><br>

        
            
    </div>
    <form action="examPay.php" method="post">
    <button type="submit" name="mark1" <?php echo !isset($details["nic1"]) ? 'disabled="true"' : '';?> >Add to Exam</button>
    </form>
    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>