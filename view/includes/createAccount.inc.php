<?php 
session_start();

include("../control/createAccount.class.php");
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


}

?>