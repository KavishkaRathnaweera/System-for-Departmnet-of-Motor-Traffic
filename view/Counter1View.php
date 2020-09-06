<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/counter1.inc.php'); ?>

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
  
 
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<button type="button" class="button1" onclick="la('../index.php')">LOGOUT</button>
<div class="navbar">

  <a href=>Verify Applicant Details</a>
 <!-- <a href='ExaminarView/ExamMarkView.php'>Mark Exam Marks</a>-->
  <a href="Counter1View/handleAbsenteesView.php">Handle Absentees</a>

</div>
<h1 class="head">Verify Details Sheet</h1>
<main class="container_C1V">
    <div class="search_box">
        <form action="Counter1View.php" method="post">
            <lable>INPUT ID: </lable>
            <input type="text" name="ID" id="ID_no">
            <button type="submit" name="search" id="search_btn">search</button>
        </form>
        <?php if(isset($_SESSION["C1nic"])) echo $_SESSION["C1error"]?>
    </div>
    
    <div class="applicantDetails_box">
        <form action="Counter1View.php" method="post">
            <h2>Applicant Details</h2>
            <label>ID: </label>
            <input type="text" name="NID" value="<?php if(isset($_SESSION["C1nic"])){echo $_SESSION["C1nic"];}?>" size="50" ><br><br>
            <label>Surname: </label>
            <input type="text" name="surname" value="<?php if(isset($_SESSION["C1surname"])){echo $_SESSION["C1surname"];}?>"  size="50"><br><br>
            <label>Full Name: </label>
            <input type="text" name="fullname" value="<?php if(isset($_SESSION["C1fullName"])){echo $_SESSION["C1fullName"];}?>"  size="50"><br><br>
            <label>Gender: </label>
            <input type="text" name="gender" value="<?php if(isset($_SESSION["gender"])){echo $_SESSION["gender"];}?>"  size="50"><br><br>
            <label>Birthday: </label>
            <input type="text" name="birthday" value="<?php if(isset($_SESSION["C1birthday"])){echo $_SESSION["C1birthday"];}?>"  size="50"><br><br>
            <label>Age: </label>
            <input type="text" name="age" value="<?php if(isset($_SESSION["C1age"])){echo $_SESSION["C1age"];}?>"  size="50"><br><br>
            <label>Height: </label>
            <input type="text" name="height" value="<?php if(isset($_SESSION["C1height"])){echo $_SESSION["C1height"];}?>"  size="50"><br><br>
            <label>Blood Group: </label>
            <input type="text" name="bloodGroup" value="<?php if(isset($_SESSION["C1bloodGroup"])){echo $_SESSION["C1bloodGroup"];}?>"  size="50"><br><br>
            <label>Vehicle: </label>
            <input type="text" name="vehicle" value="<?php if(isset($_SESSION["C1vehicle"])){echo $_SESSION["C1vehicle"];}?>"  size="50"><br><br>
            <label>Address: </label>
            <input type="text" name="address" value="<?php if(isset($_SESSION["C1addrss"])){echo $_SESSION["C1addrss"];}?>"  size="50"><br><br>
            <label>Phone: </label>
            <input type="text" name="phone" value="<?php if(isset($_SESSION["C1phone"])){echo $_SESSION["C1phone"];}?>"  size="50"><br><br>
            <label>Email: </label>
            <input type="text" name="email" value="<?php if(isset($_SESSION["C1email"])){echo $_SESSION["C1email"];}?>"  size="50"><br><br>
            <label>Verified: </label>
            <input type="text" name="verified" value="<?php if(isset($_SESSION["C1verified"])){echo $_SESSION["C1verified"];}?>"  size="50" disabled><br><br>
        
            
        <button type="button" name="scan" onclick="la('Counter1View/scanDocumentsView.php')" <?php echo !isset($_SESSION["C1nic"]) || $_SESSION["C1nic"]=="" ? 'disabled="true"' : '';?> >Scan</button>
        <button type="submit" name="verify" <?php echo !isset($_SESSION["C1nic"]) || $_SESSION["C1nic"]=="" ? 'disabled="true"' : '';?> >Verify</button>
        <button type="submit" name="notVerify" <?php echo !isset($_SESSION["C1nic"]) || $_SESSION["C1nic"]=="" ? 'disabled="true"' : '';?> >Not Verify</button>
    </form>
    </div>
</main>
    <script>function la(src)
    {
     window.location=src;
    }
    </script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>