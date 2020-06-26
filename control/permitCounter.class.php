<?php

use function PHPSTORM_META\type;

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic//model/permitCounterDB.php');

class PermitCounter extends PermitCounterDB{
	private $out;
	private $details;
	private $trialDate;
	private static PermitCounter $instance;
	private function  __construct()
	{
		$out=null;
		$trialDate=array();
		$details=array();

	}
	
	//function to get userdetails
	public function show_userDetails($id){
		
		if($id!=""){
			//fullname, exam, email  from useraccountdb and trialdate from triallistdb
			$details = $this->getUserDetails($id);
			$trialDate=($this->getTrialDate($id));
			if(empty($trialDate)){
				$trialDate["date"]="";
			}
			if(empty($details)){
				$details["error"]="invalid id";
			}

			$details=array_merge($details,$trialDate);
		}
		else{
			$details["error"]="please enter id";
		}
		
		return $details;	
    }
    public function processTrialDate($id){
		$out=$this->getLastTrialApplicant();
		if(empty($out)){
			$dateNlimit=$this->getFirstTriallimitRow();
			$out["count"]=1;
			$out["date"]=$dateNlimit["dates"];
            $out["triallimit"]=$dateNlimit["limits"];

		}
        elseif($out["count"]==$out["triallimit"]){
            $dateNlimit=$this->getNextTrialDateAndLimit(($this->getLastTrialDateNum($out["date"]))["num"]+1);
            $out["count"]=1;
            $out["date"]=$dateNlimit["dates"];
            $out["triallimit"]=$dateNlimit["limits"];


        }
        else{
            $out["count"]=$out["count"]+1;
            

        }
        return $out;
    }

	public function addToTrialList($nic, $fullname, $date, $count, $triallimit){
		$this->addToTrialListDB($nic, $fullname, $date, $count, $triallimit);
	}
	public static function getInstance():PermitCounter{
		if(!isset(self::$instance)){
			self::$instance=new PermitCounter();
		}
		return self::$instance;
	}
}
 ?>