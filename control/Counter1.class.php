<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic//model/Counter1DB.php');

class Counter1 extends Counter1DB{
	private $out;
	private $details;
	private static $instance;
	private function  __construct()
	{
		$out=null;
		$details=array();

	}
	
	//function to get userdetails
	public function show_userDetails($id){
		if($id!=""){
			$details = $this->getUserDetails($id);
			$registerDate=$this->getRegisterDate($id);
			$examDate=$this->getExamDate($id);
			$trialDate=$this->getTrialDate($id);
			$failDetails=$this->getFailDetails($id);
			if(empty($details)){
				$details["error"]="invalid id";
			}
			else{
				//specify details because all dates come as same variable--dates
				$details["registerDate"]=$registerDate["dates"];
				if(empty($examDate)){
					$details["examDate"]='No';
				}
				else{
					$details["examDate"]=$examDate["dates"];
				}
				if(empty($trialDate)){
					$details["trialDate"]='No';
				}
				else{
					$details["trialDate"]=$trialDate["dates"];
				}
				if(empty($failDetails)){
					$details["examfail"]=0;
					$details["trialfail"]=0;
				}
				elseif(!isset($failDetails["trialfail"])){
					$details["examfail"]=$failDetails["examfail"];
					$details["trialfail"]=0;
				}
				else{
					$details["examfail"]=$failDetails["examfail"];
					$details["trialfail"]=$failDetails["trialfail"];
				}
			}
			

		
		}
		else{
			$details["error"]="please enter id";
		}
		return $details;	
    }
    public function verify($id,$surname,$fullname,$gender,$birthday,$age,$height,$bloodGroup,$vehicle,$addrss,$phone,$email,$verified){
        $this->verifyToDB($id,$surname,$fullname,$gender,$birthday,$age,$height,$bloodGroup,$vehicle,$addrss,$phone,$email,$verified);
	}

	public function getNewDate($dateType,$id,$fullname){
		if($dateType=="newRegDate"){
			$limitTable="limitwait";
			$listTable="waitlist";
		}
		elseif($dateType=="newExamDate"){
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

	public static function getInstance():Counter1{
		if(!isset(self::$instance)){
			self::$instance=new Counter1();
		}
		return self::$instance;
	}
}
 ?>