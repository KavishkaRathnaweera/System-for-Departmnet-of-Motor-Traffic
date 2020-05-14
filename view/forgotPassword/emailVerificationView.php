<?php
SESSION_START();
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');

$person = new UserAccount();
if(!(isset($_GET['code']))){
    if(isset($_POST['submit'])){
        $email=$_POST['EMAIL'];
        if($person->isCorrectEmail($email)){
            $code = rand(10000,99999);
            $person->updateCodeDB($email,$code);
            $mail = new EmailSend();

            $to = $email;
			$subject = "Password Reset";
			$body ="
				This is an automated email. Please DO NOT reply to this email.
				Click the link below or paste it into your browser
				http://localhost/System-for-Departmnet-of-Motor-Traffic/view/forgotPassword/emailVerificationView.php?code=$code&email=$email
			";

            $mail->sendmail($subject,$body,$to);
            echo "Please click on the link which is sent to your email. This link valid till next 5 minutes.";

        }
        else{
            echo "Email doesn't match...!";
        }
    }
}
if(isset($_GET['code'])){
    $get_email = $_GET['email'];
    $get_code = $_GET['code'];
    $result1=$person->selectEmailByGivenEmail($get_email);
    $db_code = $result1[0]['recover_code'];
    $db_email = $result1[0]['email'];

    if($get_email == $db_email && $get_code == $db_code){
        $_SESSION['mail'] = $db_email;
        $_SESSION['code1'] = $db_code;
        header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/forgotpassword/passwordResetView.php');
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for email verification in fogotpassword option " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <link rel="icon" href="../images/3.png">
    <title>Email Verify</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <form action="emailVerificationView.php" method="post">
        <lable>INPUT EMAIL: </lable>
        <input type="text" name="EMAIL" id="email">
        <button type="submit" name="submit" id="search_btn">Submit</button>
    </form>
<?php include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>
</body>
</html>