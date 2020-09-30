<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/AdminDB.php');

class Admin extends AdminDB{

    private static $instance;
    private function __construct(){}
    // {
    //   //  $exam=new ExamList();
    //   //  $wait=new WaitList();
    // }
    public static function getInstance():Admin
    {
        if(!isset(self::$instance)){
            self::$instance = new Admin();
        }
        return self::$instance;
    }

    public function addDate($date,$limits){
        $check1=$this->checkDate($date);
        if($check1==null){
            $this->addToWaitlist($date,$limits);
        }
        else{
            $this->updateWaitList($date,$limits);
            return "No";
        }  
    }

    public function addDateExam($date,$limits){
        $check2=$this->checkDateE($date);
        if($check2==null){
            $this->addToExamtlist($date,$limits);
        }
        else{
            $this->updateExamList($date,$limits);
            return "No";
        }
    }

    public function addDateTrial($date,$limits){
        $check2=$this->checkDateT($date);
        if($check2==null){
            $this->addToTriallist($date,$limits);
        }
        else{
            $this->updateTrialList($date,$limits);
            return "No";
        }
    }

    public function changewaitLimit($limit){
        self::changeLimitWait($limit);
    }
    
    public function changeexamLimit($limit){
        self::changeLimitExam($limit);
    }

    public function changetrialLimit($limit){
        self::changeLimitTrial($limit);
    }

    public function getlimitwait1()
    {
        return self::getlimitwait();
    }
    public function getlimitexam1()
    {
        return self::getlimitexam();
    }
    public function getlimittrial1()
    {
        return self::getlimittrial();
    }

    public function checkOfficer($userID,$password)
    {
        $errors = array();

        if(empty($userID) || empty($password)){
            if($userID == ""){
                $errors[] = "userID is required";
            }
    
            if($password == "") {
                $errors[] = "Password is required";
            }
        }else{
            $result = $this->selectOfficerById($userID);
            
            if(!empty($result)) {
                if($password==$result[0]['passwrd']){
                   // $_SESSION["officeLog"]="admin";
                    $this->setOfficer($userID);
                }else{
                    $errors[] = "Password is incorrect!";
                }
            } else {		
                $errors[] = "UserID doesnot exists";
            }
        }
        return $errors;
    }

    public function setOfficer($officerName)
    {
        switch($officerName){
            case 'Counter1':
                $_SESSION["officeLog"]="#Counter1";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/Counter1View.php');
                break;
            case 'Counter2':
                $_SESSION["officeLog"]="#Counter2";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/counter2View.php');
                break;
            case 'Cashier':
                $_SESSION["officeLog"]="#Cashier";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/cashierView.php');
                break;
            case 'Examinar':
                $_SESSION["officeLog"]="#Examinar";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/examinarView.php');
                break;
            case 'Licensecounter':
                $_SESSION["officeLog"]="#Licensecounter";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/LicenseCounterView.php');
                break;
            case 'Permitcounter':
                $_SESSION["officeLog"]="#Permitcounter";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/permitCounterView.php');
                break;
            case 'Admin':
                $_SESSION["officeLog"]="#Admin";
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/AdminView.php');
                break;
        }
    }

    
}


?>