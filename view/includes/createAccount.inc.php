<?php 
session_start();

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');
//include("../createAccount.class.php");

if(isset($_POST["submit"])){
    $account = new UserAccount();
    $array1=$account->selectUserByUserName($_POST["id_no"]);
    $array2=$account->ByGivenEmailselectEmail($_POST["email"]);
if( empty($array1) && empty($array2)){

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
    $account->setPasswd(sha1($_POST["password"]));

    //echo($_POST["grp1"]);
    $account->addToDataBase(); 

    $email = EmailSend::getInstance();
    $regDate=$account->getRegistrationDate($_POST["id_no"],$_POST["full_name"]);
    $body="Dear ".$_POST["full_name"].'..<br><br>'.'
    1)Applicant should be present in person.<br><br>
    
    2)Should bring the national identity card or the valid passport with the national identity card number.<br><br>

    3)In obtaining theservice from offices where online method is available producing photographs is not required and the relevant 
    photographs are taken during the computer process. For offices where offline method is used two passport size  black and white 
    photographs with white background are required.<br><br>

    4)In obtaining a driving license for the first time, original of the birth certificate should be produced.<br><br>
    your registration date: '.$regDate;
    
    $email->sendmail('Information for License applicant',$body,$_POST["email"]);


}
else{print("Email or NIC is already registered");}
}


?>