<?php

session_start();

include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/control/permitCounter.class.php');
include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');

$permitCounterCtrl = new permitCounter();
//check for search
if (isset($_POST["search"])) {

    $id = $_POST["ID"];

    $details = $permitCounterCtrl->show_userDetails($id);

    if (!isset($details["error"])) {
        $_SESSION["error"] = "";
        $_SESSION["nic"] = $details["nic"];
        $_SESSION["fullname"] = $details["fullname"];
        $_SESSION["exam"] = $details["exam"];
        $_SESSION["email"] = $details["email"];
        $_SESSION["trialDate"] = $details["date"];
    } else {
        $_SESSION["error"] = $details["error"];
        $_SESSION["nic"] = "";
        $_SESSION["fullname"] = "";
        $_SESSION["email"] = "";
        $_SESSION["exam"] = "";
        $_SESSION["trialDate"] = "";
    }
    $_SESSION["message"] = "";
    $_SESSION["checkupdate"] = "";
}



if (isset($_SESSION["exam"]) && $_SESSION["exam"] == "pass") {
    if (isset($_POST["trialDate"])) {
        if ($_SESSION["trialDate"] == "") {
            $result = $permitCounterCtrl->processTrialDate($_SESSION["nic"]);
            $_SESSION["trialDate"] = $result["date"];
            $_SESSION["count"] = $result["count"];
            $_SESSION["triallimit"] = $result["triallimit"];
            $_SESSION["checkupdate"] = "no";
            $_SESSION["message"] = "Trial date processed Successfully";
        } else {
            $_SESSION["message"] = "Trial date is already produced";
        }
    }
}

if (isset($_POST["UpdateList"])) {

    if (isset($_SESSION["checkupdate"]) && $_SESSION["checkupdate"] == "no") {
        $permitCounterCtrl->addToTrialList($_SESSION["nic"], $_SESSION["trialDate"],  $_SESSION["count"], $_SESSION["triallimit"]);
        $_SESSION["checkupdate"] = "yes";
        $_SESSION["message"] = "UpdateList Successful";
    } elseif (isset($_SESSION["checkupdate"]) && $_SESSION["checkupdate"] == "yes") {
        $_SESSION["message"] = "Already updated";
    }
}
if (isset($_SESSION["trialDate"]) && $_SESSION["trialDate"] != "") {
    if (isset($_POST["print"])) {
        $_SESSION["message"] = "Print Successful";
    }

    if (isset($_POST["sendEmail"])) {
        $mail = new EmailSend();

        $to = $_SESSION["email"];
        $subject = "Trial date";

        $body = "Your trial date: '{$_SESSION["trialDate"]}'.<br><br> 
            On the trial date<br>
            1. Your national identity card or the valid passport with the national identity card number <br>
            2. Medical certificate,<br>
                          should be produced. Please be there on time";

        $mail->sendmail($subject, $body, $to);
        $_SESSION["message"] = "sendEmail Successful";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This page is for counter2 person " />
    <meta name="keywords" content="motor traffic,sri lanka" />
    <title>Permit Counter</title>
    <link rel="icon" href="images/3.png">
    <link rel="stylesheet" href="css/permitCounter.css">


</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/header.php');  ?>
    <button type="button" id="logout" onclick="location.href = 'http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php'">LOGOUT</button>

    <main class="container">
        <div class="search_box">
            <form action="permitCounterView.php" method="post">
                <lable>INPUT ID: </lable>
                <input type="text" name="ID" id="ID_no">
                <button type="submit" name="search" id="search_btn">search</button>
            </form>

        </div>

        <div class="applicantDetails_box">
            <input type="text" id="messagebar1" value="<?php if (isset($_SESSION["error"])) {
                                                            echo $_SESSION["error"];
                                                        } ?>" size="50" disabled>
            <h1>Applicant Details</h1>
            <label>Applicant ID----: </label>
            <input type="text" value="<?php if (isset($_SESSION["nic"])) {
                                            echo $_SESSION["nic"];
                                        } ?>" size="50" disabled><br><br>
            <label>Applicant Name: </label>
            <input type="text" value="<?php if (isset($_SESSION["fullname"])) {
                                            echo $_SESSION["fullname"];
                                        } ?>" size="50" disabled><br><br>
            <label>Exam-------------: </label>
            <input type="text" value="<?php if (isset($_SESSION["exam"])) {
                                            echo $_SESSION["exam"];
                                        } ?>" size="50" disabled><br><br>
            <label>Email-------------: </label>
            <input type="text" value="<?php if (isset($_SESSION["email"])) {
                                            echo $_SESSION["email"];
                                        } ?>" size="50" disabled><br><br>
            <label>Trial Date--------: </label>
            <input type="text" value="<?php if (isset($_SESSION["trialDate"])) {
                                            echo $_SESSION["trialDate"];
                                        } ?>" size="50" disabled>
            <input type="text" id="messagebar2" value="<?php if (isset($_SESSION["message"])) {
                                                            echo $_SESSION["message"];
                                                        } ?>" size="50" disabled>

        </div>
        <div class="button_box">

            <form action="permitCounterView.php" method="POST">
                <button type="submit" name="trialDate" id="trialDate_btn">trial date</button>
                <button type="submit" name="UpdateList" id="updateTrialList_btn">update trialList</button>
                <button type="submit" name="print" id="print_btn">print</button>
                <button type="submit" name="sendEmail" id="sendEmail_btn">send email</button>

            </form>
        </div>

    </main>



    <?php include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/view/AllPageIncludes/footer.php');  ?>

</body>

</html>