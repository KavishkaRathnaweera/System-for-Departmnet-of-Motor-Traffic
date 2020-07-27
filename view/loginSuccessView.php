<!DOCTYPE html>
<html lang="en">
<head>
<Title>Success Login</title>
    <meta name="description" content="This website to renew your licence or get a new licence and office uses only."/>
    <meta name="keywords" content="Department of Motor traffic in Sri Lanka"/>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="view/css/home.css">
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/includes/loginSuccessView.inc.php'); ?>
<h1>Login Successful!</h1>

<label>Applicant ID: </label>
<input type="text" value="<?php echo $_SESSION["userId"];?>" size="50" disabled><br><br>
<label>Applicant Name: </label>
<input type="text" value="<?php echo $_SESSION["fullname"];?>"  size="50" disabled><br><br>
<label>Verified State: </label>
<input type="text" value="<?php echo $_SESSION["verified"];?>" size="50" disabled><br><br>
<label>Exam State: </label>
<input type="text" value="<?php echo $_SESSION["exam"];?>" size="50" disabled><br><br>
<label>Trial State: </label>
<input type="text" value="<?php echo $_SESSION["trail"];?>" size="50" disabled><br><br>

<button type="button" name='answerPaper' onclick="" >Answer Paper</button>

<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
<script type="text/javascript" src="js/loginSuccess.js"></script>

</body>
</html> 