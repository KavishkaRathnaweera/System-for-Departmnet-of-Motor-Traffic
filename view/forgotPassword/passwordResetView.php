<?php
    SESSION_START();
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');

    if(isset($_POST["check"])){
        $newpass = $_POST['newpass'];
        $newpass1 = $_POST['newpass1'];
        $email = $_SESSION['mail'];
        $code1 = $_SESSION['code1'];
        //unset($_SESSION['mail']);
        //unset($_SESSION['code1']);
        if($newpass == $newpass1){
            $user=new UserAccount();
            $user->updatePasswordDB($email,$newpass);
            $user->updaterecoverCodeDB($email);

            //header('location : http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
            echo "Your password has been updated <a href='../loginView.php'>Click here to Login to your Account</a>";
            echo "Your password has been updated. Login to your Account";
        }
        else{
            echo "Password must match <a href='emailVerificationView.php?code=$code1&email=$email'>Click here to go back</a>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for reset password for fogot password option " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <link rel="icon" href="../images/3.png">
    <title>Password Reset</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>

<form action='passwordResetView.php' id='passwordDetails' method='POST'>
	Enter a new password<br><input type='password' name='newpass'><br>
	Re-enter your password<br><input type='password' name='newpass1'><p>
	<input type='submit' name='check' value='Update Password!'>
</form>

<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>
</html>