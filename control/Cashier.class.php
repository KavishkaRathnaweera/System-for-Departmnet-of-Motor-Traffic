<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/CashierDB.php');

class Cashier extends CashierDB{

    private static $instance;
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
        $dataFail = $this->getDataFromFail($nic);
        if($data==null){
            $details["noId"]="InvalidID";
        }
        else{
            if($dataFail==null){
                $details["trialF"]=null;
                $details["examF"]=null;
            }
            else{
                $details["trialF"]=$dataFail[0]["trialfail"];
                $details["examF"]=$dataFail[0]["examfail"];
            }
            $details["nic"]=$data[0]["nic"];
            $details["fullname"]=$data[0]["fullName"];
            $details["verified"]=$data[0]["verified"];
            $details["exam"]=$data[0]["exam"];
            $details["trial"]=$data[0]["trail"];
            $details["email"]=$data[0]["email"];
        }
        return $details;
    }
    public function getNewDate($dateType,$id,$fullname){
		if($dateType=="newExamDate"){
            $this->ChangeUserExam($id);
			$limitTable="limitexam";
			$listTable="examlist";
		}
		else{
			$limitTable="triallimit";
			$listTable="triallist";
		}
		$out=$this->getLastRowOFList($listTable);
		if(empty($out)){
			$date=$this->getFirstRowOFlimit($limitTable);
			$out["counts"]=1;
			$out["dates"]=$date["dates"];

		}
        elseif($out["counts"]>=($this->getLimit($limitTable,$out["dates"]))["limits"]){
            $date=$this->getNextDate($limitTable,($this->getDateNumOFlimt($limitTable,$out["dates"]))["num"]+1);
            $out["counts"]=1;
            $out["dates"]=$date["dates"];
 

        }
        else{
            $out["counts"]=$out["counts"]+1;
            

        }
        $this->addTolist($listTable,$id,$fullname,$out["dates"],$out["counts"]);
        return $out["dates"];
        //return date and add to waitlist
    }
    public function renewLicense($nic,$fullname)
    {
        $this->addToLicenseTable($nic,$fullname);
    }
    
    // public function getTrialData($nic)
    // {
    //     $data = $this->getDataFromUser($nic);
    //     $dataFail = $this->getDataFromFail($nic);
    //     if($data==null){
    //         $details["noId"]="InvalidID";
    //     }
    //     elseif($dataFail==null || $dataFail[0]["trialfail"]==null){
    //         $details["noFail"]="NotFail";
    //     }
    //     else{
    //         $details["nic"]=$data[0]["nic"];
    //         $details["fullname"]=$data[0]["fullName"];
    //         $details["exam"]=$data[0]["exam"];
    //         $details["count"]=$dataFail[0]["trialfail"];
            
    //     }
    //     return $details;
    // }

}
?>