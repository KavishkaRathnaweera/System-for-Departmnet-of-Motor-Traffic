<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/CashierDB.php');

class Cashier extends CashierDB{

    private static Cashier $instance;
    private $details;
    private function __construct(){
        $details=array();
    }

    public static function getInstance():Cashier
    {
        if(!isset(self::$instance)){
            self::$instance = new Cashier();
        }
        return self::$instance;
    }

    public function getData($nic)
    {
        $data = $this->getDataFromUser($nic);
        if($data==null){
            $details["noId"]="InvalidID";
        }
        else{
            $details["nic"]=$data[0]["nic"];
            $details["fullname"]=$data[0]["fullName"];
            $details["verified"]=$data[0]["verified"];
            
        }
        return $details;
    }

    public function getTrialData($nic)
    {
        $data = $this->getDataFromUser($nic);
        $dataFail = $this->getDataFromFail($nic);
        if($data==null){
            $details["noId"]="InvalidID";
        }
        elseif($dataFail==null || $dataFail[0]["trialfail"]==null){
            $details["noFail"]="NotFail";
        }
        else{
            $details["nic"]=$data[0]["nic"];
            $details["fullname"]=$data[0]["fullName"];
            $details["exam"]=$data[0]["exam"];
            $details["count"]=$dataFail[0]["trialfail"];
            
        }
        return $details;
    }

}
?>