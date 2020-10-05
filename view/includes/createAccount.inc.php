<?php 
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccountBuilder.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');
//include("../createAccount.class.php");
$UAB=new UserAccountBuilder();
if(isset($_POST["submit"])){
    //$account = new UserAccount();
  

    $UAB->setnic($_POST["id_no"]);
    $UAB->setSurname($_POST["surname"]);
    $UAB->setOther($_POST["other_names"]);
    $UAB->setFname($_POST["full_name"]);
    $UAB->setGender($_POST["grp1"]);
    $UAB->setBirth($_POST["date"]);
    $UAB->setAge($_POST["age"]);
    $UAB->setheight($_POST["height"]);
    $UAB->setblood($_POST["blood"]);
    $UAB->setvehicle($_POST["vehicle"]);
    $UAB->setAddrs($_POST["address"]);
    $UAB->setPhone($_POST["phone_number"]);
    $UAB->setEmail($_POST["email"]);
    $UAB->setPasswd(sha1($_POST["password"]));

    $account=$UAB->getUser();
    
    $array1=$account->selectUserByUserName($_POST["id_no"]);
    $array2=$account->ByGivenEmailselectEmail($_POST["email"]);
if( empty($array1) && empty($array2)){

    //echo($_POST["grp1"]);

    $account->addToDataBase(); 

    $email = EmailSend::getInstance();
    $regDate=$account->getRegistrationDate($_POST["id_no"],$_POST["full_name"]);
    $body="Dear ".$_POST["full_name"].'..<br><br>'.'
    
    Your license apply informations is here.<br><br>
    1)Applicant should be present in person.<br><br>
    
    2)Should bring the national identity card or the valid passport with the national identity card number.<br><br>

    3)In obtaining theservice from offices where online method is available producing photographs is not required and the relevant 
    photographs are taken during the computer process. For offices where offline method is used two passport size  black and white 
    photographs with white background are required.<br><br>

    4)In obtaining a driving license for the first time, original of the birth certificate should be produced.<br><br>
    your registration date: '.$regDate;
    
    $email->sendmail('Information for License applicant',$body,$_POST["email"]);


}


}


?>