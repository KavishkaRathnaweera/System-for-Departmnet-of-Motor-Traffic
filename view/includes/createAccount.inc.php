<?php 
session_start();

include("../control/createAccount.class.php");
include("../control/EmailSend.php");
//include("../createAccount.class.php");

if(isset($_POST["submit"])){
    $account = new createAccount();
    $account->setnic($_POST["id_no"]);
    $account->setSurname($_POST["surname"]);
    $account->setOther($_POST["other_names"]);
    $account->setFname($_POST["full_name"]);
    $account->setGender($_POST["grp1"]);
    $account->setBirth($_POST["date"]);
    $account->setAge($_POST["age"]);
    $account->setheight($_POST["height"]);
    $account->setblood($_POST["blood"]);
    $account->setvehicle($_POST["vehicle"]);
    $account->setAddrs($_POST["address"]);
    $account->setPhone($_POST["phone_number"]);
    $account->setEmail($_POST["email"]);
    $account->setPasswd($_POST["password"]);

    //echo($_POST["grp1"]);
    $account->addToDataBase();

    $email = new EmailSend();
    $body='1)Applicant should be present in person.
    2)Should bring the national identity card or the valid passport with the national identity card number.
    3)In obtaining theservice from offices where online method is available producing photographs is not required and the relevant 
    photographs are taken during the computer process. For offices where offline method is used two passport size  black and white 
    photographs with white background are required.
    4)In obtaining a driving license for the first time, original of the birth certificate should be produced.';
    
    $email->sendmail('Information for License applicant',$body,$_POST["email"]);


}

?>