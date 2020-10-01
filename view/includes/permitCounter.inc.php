<?php

//session_start();

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/CounterFactory.class.php');
include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');


//check for search 
$permitCounterCtrl = CounterFactory::getCounter("permitCounter");
if (isset($_POST["search"])) {

    $id = $_POST["ID"];
    $details = $permitCounterCtrl->show_userDetails($id);

    if (!isset($details["error"])) {
        $_SESSION["Perror"] = "";
        $_SESSION["Pnic"] = $details["nic"];
        $_SESSION["Pfullname"] = $details["fullname"];
        $_SESSION["Pexam"] = $details["exam"];
        $_SESSION["Pemail"] = $details["email"];
        $_SESSION["PtrialDate"] = $details["dates"];
    } else {
        $_SESSION["Perror"] = $details["error"];
        $_SESSION["Pnic"] = "";
        $_SESSION["Pfullname"] = "";
        $_SESSION["Pemail"] = "";
        $_SESSION["Pexam"] = "";
        $_SESSION["PtrialDate"] = "";
    }
    $_SESSION["Pmessage"] = "";
    $_SESSION["Pcheckupdate"] = "";
}



if (isset($_SESSION["Pexam"]) && $_SESSION["Pexam"] == "Yes") {
    if (isset($_POST["trialDate"])) {
        if ($_SESSION["PtrialDate"] == "") {
            $result = $permitCounterCtrl->processTrialDate($_SESSION["Pnic"]);
            $_SESSION["PtrialDate"] = $result["dates"];
            $_SESSION["Pcount"] = $result["counts"];
            $_SESSION["Pcheckupdate"] = "No";
            $_SESSION["Pmessage"] = "Trial date processed Successfully";
        } else {
            $_SESSION["Pmessage"] = "Trial date is already produced";
        }
    }
}

if (isset($_POST["UpdateList"])) {

    if (isset($_SESSION["Pcheckupdate"]) && $_SESSION["Pcheckupdate"] == "No") {
        $permitCounterCtrl->addToTrialList($_SESSION["Pnic"], $_SESSION["Pfullname"], $_SESSION["PtrialDate"],  $_SESSION["Pcount"]);
        $_SESSION["Pcheckupdate"] = "Yes";
        $_SESSION["Pmessage"] = "Update List Successful";
    } elseif (isset($_SESSION["Pcheckupdate"]) && $_SESSION["Pcheckupdate"] == "Yes") {
        $_SESSION["Pmessage"] = "Already updated";
    }
}
if (isset($_SESSION["PtrialDate"]) && $_SESSION["PtrialDate"] != "" && $_SESSION["Pcheckupdate"] == "Yes") {
    if (isset($_POST["print"])) {
        $_SESSION["Pmessage"] = "Print Successful";
    }

    if (isset($_POST["sendEmail"])) {
        $mail = EmailSend::getInstance();

        $to = $_SESSION["Pemail"];
        $subject = "Trial date";

        $body = "Your trial date: '{$_SESSION["PtrialDate"]}'.<br><br> 
            On the trial date<br>
            1. Your national identity card or the valid passport with the national identity card number <br>
            2. Medical certificate,<br>
                          should be produced. Please be there on time";

        $mail->sendmail($subject, $body, $to);
        $_SESSION["Pmessage"] = "Send email successful";
    }
}
if(isset($_POST["button1"])){
    unset($_SESSION['officeLog']);
    header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/index.php');
}



?>