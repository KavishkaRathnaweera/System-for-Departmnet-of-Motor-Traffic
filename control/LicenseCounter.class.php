<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/LicenseCounterDB.php');

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
    public function issuedLicense($id){
        $this->updateUserAccount($id);
		$this->removeFromlicenseTable($id);
	}
	
	public static function getInstance():LicenseCounter{
		if(!isset(self::$instance)){
			self::$instance=new LicenseCounter();
		}
		return self::$instance;
	}
	public function showQuestion()
    {
        $applicantArray = $this->getQ();
        $table = '<table >';
        $table .='<tr><th width="150">ID</th><th width="900">Full Name</th></tr>';
        for($i=0; $i < sizeof($applicantArray); ++$i){
            $table.='<tr>';
            foreach ($applicantArray[$i] as $key => $applicant) {
                $table.='<td>'.$applicant.'</td>';
            }
            $table.='</tr>';
        //echo $questionArray[0]["question"];
        }
        $table .= '</table>';
        echo($table);
    }

}
 ?>