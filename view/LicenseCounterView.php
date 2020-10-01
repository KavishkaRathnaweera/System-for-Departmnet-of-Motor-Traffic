<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/session.php'); ?>
 <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/licenseCounter.inc.php'); ?>
 <?php 
if($_SESSION["officeLog"]!="#Licensecounter"){
    header("location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>License Counter</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/licenseCounter.css?v=<?php echo time(); ?>">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" class="logout" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">LOGOUT</button>
    <div class="navbar">

<a href=>License Issuing</a>
<a href='LicensecounterView/issueListview.php'>Issuing List</a>

</div>
    <main class="container">
        <div class="search_box">
        <form id="Search" action="LicenseCounterView.php#Search" method="post" class="searchform">
                <label>Applicant ID: </label>
                <input type="text" name="ID" id="ID_no" placeholder="Enter applicant id">
                <button type="submit" name="search" id="search_btn">search</button>
            </form>
            <input type="text" id="messagebar1" value="<?php echo $_SESSION["error"]?>" size="50" disabled>
        </div>

        <div class="applicantDetails_box">
            
            <h1>Applicant Details</h1>
            <label>Applicant ID: </label>
            <input type="text" value="<?php echo $_SESSION["lnic"]?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php echo $_SESSION["lname"]?>" size="50" disabled><br><br>
            <label>Trial: </label>
            <input type="text" value="<?php echo $_SESSION["ltrial"]?>" size="50" disabled><br><br>
        </div>
     <div class="button_box">   
    <form id="issue" action="LicenseCounterView.php#issue" method="post">
    <button type="submit" name="issueLicense" <?php echo !isset($details["nic"]) ? 'disabled="true"' : '';?> >Issue License</button>
    </form>
    </div>
    </main>
    



    <?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>

</html>