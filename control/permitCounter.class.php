<?php

use function PHPSTORM_META\type;

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/permitCounterDB.php');

class PermitCounter extends PermitCounterDB{
	private $out;
	private $details;
	private $trialDate;
	private static $instance;
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
				$trialDate["dates"]="";
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
		$out=$this->getLastTrialApplicant();//get count and date of triallist row which added recently.
		
		if(empty($out)){
			$date=$this->getFirstTriallimitRow();//get first date of triallimt table.
			$out["counts"]=1;
			$out["dates"]=$date["dates"];

		}
        elseif($out["counts"]>=($this->getTrialLimit($out["dates"]))["limits"]){//if the count and limit are equal, get the next date from limittable,
            $date=$this->getNextTrialDate(($this->getTrialDateNum($out["dates"]))["num"]+1);
            $out["counts"]=1;
            $out["dates"]=$date["dates"];


        }
        else{
            $out["counts"]=$out["counts"]+1; // if count and limit are equal, return same date and count is incremented by 1
		}

        return $out;
    }

	public function addToTrialList($nic, $fullname, $date, $count){// processed trial date is added to the trial table
		$this->addToTrialListDB($nic, $fullname, $date, $count);
	}
	public static function getInstance():PermitCounter{
		if(!isset(self::$instance)){
			self::$instance=new PermitCounter();
		}
		return self::$instance;
	}
}
 ?>