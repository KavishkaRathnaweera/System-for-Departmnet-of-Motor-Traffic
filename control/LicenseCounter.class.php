<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic//model/LicenseCounterDB.php');

class LicenseCounter extends LicenseCounterDB{
	private $details;
	private static $instance;
	private function  __construct()
	{
		$details=array();

	}
	
	//function to get userdetails
	public function show_userDetails($id){
		if($id!=""){
			$details = $this->getUserDetails($id);
			if(empty($details)){
				$details["error"]="invalid id";
			}

		
		}
		else{
			$details["error"]="please enter id";
		}
		return $details;	
    }
    public function updateUserAccount($id){
        $this->addToDB($id);
    
    }
	public static function getInstance():LicenseCounter{
		if(!isset(self::$instance)){
			self::$instance=new LicenseCounter();
		}
		return self::$instance;
	}
}
 ?>