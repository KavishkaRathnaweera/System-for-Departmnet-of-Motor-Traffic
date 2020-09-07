<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/cashier.inc.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for creating new driving licence or renew your current licence "/>
    <meta name="keywords" content="motor traffic,sri lanka"/>
    <title>Cashier</title>
    <link rel="stylesheet" type="text/css" href="css/cashier.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/3.png">
    
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="button1" onclick="la('../index.php')">LOGOUT</button>
<script>function la(src)
    {
     window.location=src;
    }
    </script>

<h1 class="head">Make Payments</h1>

    <div class="search_box">
        <form action="cashierView.php" id ="exmid" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
        <h3 ><?php echo $_SESSION["IdError"]?></h3>
    </div>
    

    <div class="applicantDetails_box">
            <h2>Applicant Details</h2>
            <label>Applicant ID----: </label>
            <input type="text" value="<?php echo $_SESSION["nic"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["fullname"]?>"  size="50" disabled><br><br>
            <label>Verified: </label>
            <input type="text" value="<?php echo $_SESSION["verified"]?>"  size="50" disabled><br><br>
            <label>Exam: </label>
            <input type="text" value="<?php echo $_SESSION["exam"]?>"  size="50" disabled><br><br>
            <label>Exam Fail: </label>
            <input type="text" value="<?php echo $_SESSION["examF"]?>"  size="50" disabled><br><br>
            <label>Trial: </label>
            <input type="text" value="<?php echo $_SESSION["trial"]?>"  size="50" disabled><br><br>
            <label>Trial Fail: </label>
            <input type="text" value="<?php echo $_SESSION["trialF"]?>"  size="50" disabled><br><br>
       
    </div>

    <form action="cashierView.php" method="post">
    <p>
    <label for="">Select List : </label>
            <select  name="ExamAndTrial">
                <option value="examAdd">Exam List</option>
                <option value="trialAdd">Trial List</option>
            </select>
    </p>
    <button type="submit" name="mark" <?php echo !isset($details["nic"]) ? 'disabled="true"' : '';?> >Make Payment</button>
    </form>

    



<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>