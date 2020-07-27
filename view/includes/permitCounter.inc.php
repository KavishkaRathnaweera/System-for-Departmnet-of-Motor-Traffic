<?php

session_start();

include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/control/PermitCounter.class.php');
include($_SERVER['DOCUMENT_ROOT'] . '/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');


//check for search 
$permitCounterCtrl = PermitCounter::getInstance();
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
        $permitCounterCtrl->addToTrialList($_SESSION["nic"], $_SESSION["fullname"], $_SESSION["trialDate"],  $_SESSION["count"], $_SESSION["triallimit"]);
        $_SESSION["checkupdate"] = "yes";
        $_SESSION["message"] = "Update List Successful";
    } elseif (isset($_SESSION["checkupdate"]) && $_SESSION["checkupdate"] == "yes") {
        $_SESSION["message"] = "Already updated";
    }
}
if (isset($_SESSION["trialDate"]) && $_SESSION["trialDate"] != "") {
    if (isset($_POST["print"])) {
        $_SESSION["message"] = "Print Successful";
    }

    if (isset($_POST["sendEmail"])) {
        $mail = EmailSend::getInstance();

        $to = $_SESSION["email"];
        $subject = "Trial date";

        $body = "Your trial date: '{$_SESSION["trialDate"]}'.<br><br> 
            On the trial date<br>
            1. Your national identity card or the valid passport with the national identity card number <br>
            2. Medical certificate,<br>
                          should be produced. Please be there on time";

        $mail->sendmail($subject, $body, $to);
        $_SESSION["message"] = "Send email successful";
    }
}



?>