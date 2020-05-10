<?php
include("../model/DataList.php");

class Admin extends DataList{

  
    // public function __construct()
    // {
    //   //  $exam=new ExamList();
    //   //  $wait=new WaitList();
    // }

    public function addDate($date){

    }

    public function changewaitLimit($limit){
        self::changeLimitWait($limit);
    }
    
    public function changeexamLimit($limit){
        self::changeLimitExam($limit);
    }

    public function getlimitwait1()
    {
        return self::getlimitwait();
    }
    public function getlimitexam1()
    {
        return self::getlimitexam();
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
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/counter1View.php');
                break;
            case 'Counter2':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/counter2View.php');
                break;
            case 'Cashier':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/cashierView.php');
                break;
            case 'Examinar':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/examinarView.php');
                break;
            case 'Licencecounter':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/licenceCounterView.php');
                break;
            case 'Permitcounter':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/permitCounterView.php');
                break;
            case 'Admin':
                header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/AdminView.php');
                break;
        }
    }
}


?>