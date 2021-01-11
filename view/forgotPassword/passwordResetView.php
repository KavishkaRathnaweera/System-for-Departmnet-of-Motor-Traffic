<?php
    SESSION_START();
    include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');
    $msg_state="2";
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
            $msg_state="1";
            //header('location : http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginView.php');
            //echo "Your password has been updated <a href='../loginView.php'>Click here to Login to your Account</a>";
            //echo "Your password has been updated. Login to your Account";
        }
        else{
            $msg_state="0";
            //echo "Password must match <a href='emailVerificationView.php?code=$code1&email=$email'>Click here to go back</a>";
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
    <link rel="stylesheet" href="../css/passwordReset.css?v=<?php echo time(); ?>">
    <title>Password Reset</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
<main class="container">
    <h1>Change Password</h1><br>
    <form action='passwordResetView.php' id='passwordDetails' method='POST'>
        <div class="inputs">
            <label>Enter new Password----: </label>
            <input type='password' name='newpass' size="50"><br><br>
            <label>Re-Enter new Password: </label>
            <input type='password' name='newpass1' size="50"><br><br>
        </div>
        <div class="button_box">
            <input type='submit' name='check' value='Update Password!'>
        </div>
    </form>
    <br><br>
    <div class ="popup"> <?php
    if($msg_state=="1"){
        print("Your password has been updated <a href='../loginView.php'>Click here to Login to your Account</a>");
    }
    elseif($msg_state=="0"){
        print("Password doesn't match...!");
    }
    ?> </div>

</main>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>
</html>