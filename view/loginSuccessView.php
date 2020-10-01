<!DOCTYPE html>
<html lang="en">
<head>
<Title>Success Login</title>
    <meta name="description" content="This website to renew your licence or get a new licence and office uses only."/>
    <meta name="keywords" content="Department of Motor traffic in Sri Lanka"/>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/loginSuccess.css?v=<?php echo time(); ?>">
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/loginSuccessView.inc.php'); ?>
<form action="loginSuccessView.php" id="logout" class="Logout" method="post">
    <button type="submit" class="logout" name="button1" >LOGOUT</button>
</form>

<main class="container">
    <div class="title">
        <h1>Login Successful!</h1>
    </div>
    <div class="applicantDetails_box">
        <h1>Applicant Details</h1>
        <label>Applicant ID: </label>
        <input type="text" value="<?php echo $_SESSION["userid"];?>" size="50" disabled><br><br>
        <label>Applicant Name: </label>
        <input type="text" value="<?php echo $_SESSION["fullname"];?>"  size="50" disabled><br><br>
        <label>Verified State: </label>
        <input type="text" value="<?php echo $_SESSION["verified"];?>" size="50" disabled><br><br>
        <label>Exam State: </label>
        <input type="text" value="<?php echo $_SESSION["exam"];?>" size="50" disabled><br><br>
        <label>Trial State: </label>
        <input type="text" value="<?php echo $_SESSION["trail"];?>" size="50" disabled><br><br>
    </div>
    <form action="loginSuccessView.php" id="loginSuccessDetail" class="loginSuccess" method="post">
        <button type="button" name="answerPaper" onclick="myFunction()">Answer Paper</button>
        <button type="submit" name="renewLicense">Re-new License</button>
    </form>


</main>


<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
<script type="text/javascript" src="js/loginSucces.js"></script>

<script type="text/javascript">
    function myFunction() {
        var err = "<?php echo(($loggeduser->checkUserForWriteExam($_SESSION["userid"],date("Y-m-d")))[0]) ?>";
        if(err!="you can write the exam"){
            alert(err);
        }else{
            location.href="ExamPaper.php";
        }
    }
</script>


</body>
</html>