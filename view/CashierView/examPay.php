<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php
//session_start();
	 include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Cashier.class.php');
    //check for search
    $_SESSION["IdError"]="";
    $_SESSION["nic"]="";
    $_SESSION["fullname"]="";
    $_SESSION["verified"]="";

    $cashierCtrl = Cashier::getInstance();
    
    if (isset($_POST["search"])) {
        
		$id = $_POST["ID"];
		
        $details = $cashierCtrl->getData($id);

        if(isset($details["noId"])){
            $_SESSION["IdError"]="Invalid ID";
            
           
        }
        elseif(isset($details["nic"])){
            $_SESSION["nic"]=$details["nic"];
            $_SESSION["fullname"]=$details["fullname"];
            $_SESSION["verified"]=$details["verified"];
            $_SESSION["id"]=$details["nic"];
        }
       
    }
    
    if (isset($_POST["mark"])){
        $cashierCtrl->markAttendance($_SESSION["id"]);
    }
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
    <title>pay</title>
    <link rel="stylesheet" type="text/css" href="../css/cashier.css?v=<?php echo time(); ?>">
    <link rel="icon" href="../images/3.png">
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<form action="examPay.php" class="Logout"  method="post">
        <button type="submit" class="logout" name="button1" >LOGOUT</button>
</form>
<script>function la(src)
    {
     window.location=src;
    }
    </script>
<div class="navbar">

  <a href='../cashierView.php'>Make Payment</a>
  <a href=>Add Exam List</a>
  <a href="trialPay.php">Add Trial List</a>

</div>

<h1 class="head">Add Exam List</h1>

    <div class="search_box">
        <form action="examPay.php#exmid" id ="exmid" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
    </div>
    <h3 ><?php echo $_SESSION["IdError"]?></h3>

    <div class="applicantDetails_box">
            <h2>Applicant Details</h2>
            <label>Applicant ID----: </label>
            <input type="text" value="<?php echo $_SESSION["nic"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["fullname"]?>"  size="50" disabled><br><br>
            <label>Verified: </label>
            <input type="text" value="<?php echo $_SESSION["verified"]?>"  size="50" disabled><br><br>

        
            
    </div>
    <form action="examPay.php" method="post">
    <button type="submit" name="mark" <?php echo !isset($details["nic"]) ? 'disabled="true"' : '';?> >Add to Exam</button>
    </form>
    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>