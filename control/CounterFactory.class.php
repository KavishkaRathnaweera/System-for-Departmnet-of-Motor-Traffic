<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Admin.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Cashier.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Counter1.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Counter2.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Examinar.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/LicenseCounter.class.php');
include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/permitCounter.class.php');

class CounterFactory{
    public static function getCounter($counterType){
        if($counterType=="Admin"){
            return(Admin::getInstance());
        }
        if($counterType=="Cashier"){
            return(Cashier::getInstance());
        }
        if($counterType=="Counter1"){
            return(Counter1::getInstance());
        }
        if($counterType=="Counter2"){
            return(Counter2::getInstance());
        }
        if($counterType=="Examinar"){
            return(Examinar::getInstance());
        }
        if($counterType=="LicenseCounter"){
            return(LicenseCounter::getInstance());
        }
        if($counterType=="permitCounter"){
            return(permitCounter::getInstance());
        }

    }
}